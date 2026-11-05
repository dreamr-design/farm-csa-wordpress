<?php
/**
 * Title: Farm notes: blog-section
 * Slug: farm-csa/blog-section
 * Categories: farm-csa
 */
?>
<!-- wp:group {"tagName":"section","className":"section band","ariaLabel":"Latest farm notes"} -->
<section class="wp-block-group section band" aria-label="Latest farm notes"><!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"wrap"} -->
<div class="wp-block-query wrap"><!-- wp:post-template {"className":"post-list"} -->
<!-- wp:html -->
<article class="post-card">
              <div class="packet">
                <div class="packet__top"><span>Farm note</span><span class="reg" aria-hidden="true"></span></div>
                <div class="packet__art"><img src="{theme:post:cover}" alt="" width="200" height="200" loading="lazy"></div>
                <h2 class="packet__name"><a href="{theme:post:url}">{theme:post:title}</a></h2>
                <p class="post-card__excerpt">{theme:post:description}</p>
                <p class="post-card__by"><span>Bramblecut Farm</span><span class="post-date">{theme:post:date}</span></p>
                <div class="packet__ink" aria-hidden="true"><i></i><i></i><i></i></div>
              </div>
            </article>
<!-- /wp:html -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"pagination"} -->
<!-- wp:query-pagination-previous {"label":"\u0026larr; Newer notes","className":"pagination__step"} /-->

<!-- wp:query-pagination-next {"label":"Older notes \u0026rarr;","className":"pagination__step"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
