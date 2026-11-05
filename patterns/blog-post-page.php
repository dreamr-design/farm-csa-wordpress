<?php
/**
 * Title: A farm note: blog-post-page
 * Slug: farm-csa/blog-post-page
 * Categories: farm-csa
 */
?>
<!-- wp:group {"tagName":"article","className":"post","ariaLabel":"{theme:post:title}"} -->
<article class="wp-block-group post" aria-label="{theme:post:title}"><!-- wp:html -->
<div class="page-hero">
        <div class="wrap">
          <div>
            <p class="kicker">Farm notes · From the rows at Bramblecut</p>
            <h1 id="page-title">{theme:post:title}</h1>
            <p class="lede">{theme:post:description}</p>
            <p class="post-meta"><span>Written after chores</span><span class="post-date">{theme:post:date}</span></p>
          </div>
          <p class="stamp stamp--round">Written<strong>Wed.</strong>packed Thurs.</p>
        </div>
      </div>
<!-- /wp:html -->

<!-- wp:group {"className":"wrap post-wrap"} -->
<div class="wp-block-group wrap post-wrap"><!-- wp:html -->
<figure class="post-lead">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hills.svg' ) ); ?>" alt="Screenprint of the Bramblecut hollow at sunrise: the red barn, a silo, and the striped rows of the south slope" width="1440" height="320">
        </figure>
<!-- /wp:html -->

<!-- wp:post-content {"className":"post-body"} /-->

<!-- wp:paragraph {"className":"post-back"} -->
<p class="post-back"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">&larr; All farm notes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
