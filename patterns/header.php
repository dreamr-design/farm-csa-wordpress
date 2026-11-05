<?php
/**
 * Title: Header
 * Slug: farm-csa/header
 * Categories: farm-csa
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>
<!-- wp:html -->
<a class="skip" href="#main">Skip to content</a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"topbar"} -->
<p class="topbar">Farm stand open <strong>Fri to Sun, 9 to 6</strong> on County Road B. The honor box never closes.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<header class="site-header">
    <div class="wrap">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bramblecut Farm, home">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/mark.svg' ) ); ?>" alt="" width="46" height="46">
        <span>Bramblecut<small>Farm · Est. 2011</small></span>
      </a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav"><span aria-hidden="true"></span>Menu</button>
      <nav class="nav" id="site-nav" aria-label="Main">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"{theme:current:/}>Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"{theme:current:/pricing/}>Shares &amp; pricing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"{theme:current:/about/}>About the farm</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"{theme:current:/blog/}>Farm notes</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"{theme:current:/contact/}>Contact</a></li>
        </ul>
        <a class="btn btn--sm" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Join the CSA</a>
      </nav>
    </div>
  </header>
<!-- /wp:html -->
