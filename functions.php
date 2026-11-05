<?php
/**
 * Bramblecut: the theme's functions. The templates are block markup; everything that
 * changes per request or per setting is filled here.
 *
 * @package farm-csa
 */

/**
 * Every service setting with its default and what it does
 *
 * @return array
 */
function farm_csa_settings() {
	return array(
		'chatsy_agent_id' => array(
			'default' => '',
			'doc'     => 'Chatsy agent id. Create a free AI chat agent at https://chatsy.ai, paste its id here, and a chat button appears on every page. Leave empty for no chat button.',
		),
		'slapform_form_id' => array(
			'default' => '',
			'doc'     => 'Slapform form id. Create a free form at https://slapform.com and paste its id here; every form on the site then delivers to your inbox with spam protection.',
		),
	);
}

/**
 * One service setting's value: the Customizer's, else its default
 *
 * @param string $key The setting key.
 * @return string
 */
function farm_csa_setting( $key ) {
	$settings = farm_csa_settings();
	return isset( $settings[ $key ] ) ? (string) get_theme_mod( $key, $settings[ $key ]['default'] ) : '';
}

/**
 * The editor canvas loads the theme's stylesheet and fonts, so it looks like the site
 */
function farm_csa_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'assets/css/styles.css', 'https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Courier+Prime:wght@400;700&family=Libre+Franklin:wght@400;600;700;800&family=Stardos+Stencil:wght@700&display=swap' ) );
}
add_action( 'after_setup_theme', 'farm_csa_setup' );

/**
 * The pattern category every section pattern of this theme sits in
 */
function farm_csa_patterns() {
	register_block_pattern_category( 'farm-csa', array( 'label' => 'Bramblecut' ) );
}
add_action( 'init', 'farm_csa_patterns' );

/**
 * The stylesheet and main.js on every page
 */
function farm_csa_assets() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'farm-csa', get_theme_file_uri( 'assets/css/styles.css' ), array(), $version );
	wp_enqueue_script( 'farm-csa', get_theme_file_uri( 'assets/js/main.js' ), array(), $version, array( 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'farm_csa_assets' );
// The theme's header carries its own skip link
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_block_template_skip_link' );

/**
 * The head lines: fonts, icons and any service loader
 */
function farm_csa_head() {
	?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Courier+Prime:wght@400;700&family=Libre+Franklin:wght@400;600;700;800&family=Stardos+Stencil:wght@700&display=swap">
	<?php
}
add_action( 'wp_head', 'farm_csa_head' );

/**
 * The service scripts before </body>
 */
function farm_csa_footer() {
	?>
<?php if ( farm_csa_setting( 'chatsy_agent_id' ) ) : ?>
<script src="https://cdn.jsdelivr.net/npm/chatsy@latest/dist/chatsy.min.js" data-agent-id="<?php echo esc_attr( farm_csa_setting( 'chatsy_agent_id' ) ); ?>" data-button-background-color="#862612" data-button-text-color="#FFFFFF"></script>
<?php endif; ?>
<?php if ( farm_csa_setting( 'slapform_form_id' ) ) : ?>
<script src="https://cdn.jsdelivr.net/npm/slapform@latest/dist/slapform.min.js" defer></script>
<?php endif; ?>
	<?php
}
add_action( 'wp_footer', 'farm_csa_footer' );

/**
 * The Customizer's Services section: every service setting, under Appearance, Customize
 *
 * @param WP_Customize_Manager $wp_customize The Customizer.
 */
function farm_csa_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'farm_csa_services',
		array(
			'title'       => 'Services',
			'description' => 'The services this theme ships with. Leave a setting empty to turn its service off.',
		)
	);
	$wp_customize->add_setting(
		'chatsy_agent_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'chatsy_agent_id',
		array(
			'label'       => 'Chatsy agent id',
			'description' => 'Chatsy agent id. Create a free AI chat agent at https://chatsy.ai, paste its id here, and a chat button appears on every page. Leave empty for no chat button.',
			'section'     => 'farm_csa_services',
			'type'        => 'text',
		)
	);
	$wp_customize->add_setting(
		'slapform_form_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'slapform_form_id',
		array(
			'label'       => 'Slapform form id',
			'description' => 'Slapform form id. Create a free form at https://slapform.com and paste its id here; every form on the site then delivers to your inbox with spam protection.',
			'section'     => 'farm_csa_services',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'farm_csa_customize_register' );

/**
 * Fill the placeholders block markup carries, on every render, so a Customizer change shows at once
 *
 * @param string $content A block's rendered markup.
 * @return string
 */
function farm_csa_fill( $content ) {
	if ( false === strpos( $content, '{theme:' ) ) {
		return $content;
	}
	$content = preg_replace_callback( '/\{theme:if:([a-z_]+)\}(.*?)\{theme:endif\}/s', 'farm_csa_fill_if', $content );
	return preg_replace_callback( '/\{theme:([a-z-]+)(?::([^{}]*))?\}/', 'farm_csa_fill_token', $content );
}
add_filter( 'render_block', 'farm_csa_fill' );

/**
 * Keep an if-block's body when its setting is set
 *
 * @param array $match The setting key and the body.
 * @return string
 */
function farm_csa_fill_if( $match ) {
	return farm_csa_setting( $match[1] ) ? $match[2] : '';
}

/**
 * One placeholder's value
 *
 * @param array $match The kind and its argument.
 * @return string
 */
function farm_csa_fill_token( $match ) {
	$arg = isset( $match[2] ) ? $match[2] : '';
	switch ( $match[1] ) {
		case 'config':
			return esc_attr( farm_csa_setting( $arg ) );
		case 'url':
			return esc_url( home_url( $arg ) );
		case 'asset':
			return esc_url( get_theme_file_uri( 'assets/' . $arg ) );
		case 'year':
			return esc_html( wp_date( 'Y' ) );
		case 'site-name':
			return esc_html( get_bloginfo( 'name' ) );
		case 'current':
			return farm_csa_current( $arg );
		case 'post':
			return farm_csa_post( $arg );
	}
	return $match[0];
}

/**
 * The aria-current mark for the nav link of the page being shown
 *
 * @param string $path The link's site path.
 * @return string
 */
function farm_csa_current( $path ) {
	$request = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/';
	$here    = untrailingslashit( (string) wp_parse_url( $request, PHP_URL_PATH ) );
	$there   = untrailingslashit( (string) wp_parse_url( home_url( $path ), PHP_URL_PATH ) );
	return $here === $there ? ' aria-current="page"' : '';
}

/**
 * One field of the post being shown, in the blog loop or on the article page
 *
 * @param string $field title, url, date, description or cover.
 * @return string
 */
function farm_csa_post( $field ) {
	switch ( $field ) {
		case 'title':
			return esc_html( get_the_title() );
		case 'url':
			return esc_url( get_permalink() );
		case 'date':
			return esc_html( get_the_date( 'F j, Y' ) );
		case 'description':
			return esc_html( get_the_excerpt() );
		case 'cover':
			if ( has_post_thumbnail() ) {
				return esc_url( get_the_post_thumbnail_url( null, 'full' ) );
			}
			$cover = get_post_meta( get_the_ID(), 'theme_cover', true );
			return $cover ? esc_url( get_theme_file_uri( 'assets/' . $cover ) ) : '';
	}
	return '';
}

/**
 * The blog pages 6 posts at a time, as every release of this theme does
 *
 * @param WP_Query $query The query about to run.
 */
function farm_csa_posts_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
		$query->set( 'posts_per_page', 6 );
	}
}
add_action( 'pre_get_posts', 'farm_csa_posts_per_page' );
