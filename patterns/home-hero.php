<?php
/**
 * Title: Home: Twenty weeks of the farm, packed in a crate.
 * Slug: farm-csa/home-hero
 * Categories: farm-csa
 */
?>
<!-- wp:html -->
<section class="hero" aria-labelledby="hero-title">
      <div class="wrap">
        <div>
          <p class="kicker">Certified organic · Viroqua, Wisconsin</p>
          <h1 id="hero-title">Twenty weeks of the farm, <em>packed in a crate.</em></h1>
          <p class="lede">Bramblecut Farm grows 140 kinds of vegetables on 22 acres of Driftless hillside. Join the CSA and a crate of whatever came in that week lands at your pickup every Thursday, June to October.</p>
          <div class="btn-row">
            <a class="btn" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Reserve a 2027 share</a>
            <a class="btn btn--ghost" href="#box">See this week's crate</a>
          </div>
          <ul class="hero__facts">
            <li>310 member households</li>
            <li>Pickups in six towns</li>
            <li>Sliding scale shares</li>
          </ul>
        </div>
        <div class="hero__art">
          <div class="packet-wrap">
            <article class="packet" aria-label="The farm share, drawn as a seed packet">
              <div class="packet__top"><span class="reg" aria-hidden="true"></span><span>Bramblecut Farm · Lot 2027</span><span class="reg" aria-hidden="true"></span></div>
              <div class="packet__art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/veg/tomato.svg' ) ); ?>" alt="Screenprinted heirloom tomato in red and green ink" width="240" height="240"></div>
              <p class="packet__name">Farm Share</p>
              <p class="packet__variety">Mixed vegetable, open-pollinated, grown here</p>
              <dl class="packet__back">
                <dt>Sow</dt><dd>Sign up by March 15</dd>
                <dt>Harvest</dt><dd>Every Thursday, June 10 to October 21</dd>
                <dt>Yield</dt><dd>20 crates, 6 to 12 items each</dd>
                <dt>Grows best</dt><dd>In a kitchen, with company</dd>
              </dl>
              <div class="packet__ink" aria-hidden="true"><i></i><i></i><i></i></div>
            </article>
          </div>
          <p class="stamp stamp--round">Packed<strong>Thurs.</strong>Week 17</p>
        </div>
      </div>
    </section>
<!-- /wp:html -->
