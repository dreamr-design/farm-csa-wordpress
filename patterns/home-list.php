<?php
/**
 * Title: Home: Get on the list before the seeds go in.
 * Slug: farm-csa/home-list
 * Categories: farm-csa
 */
?>
<!-- wp:html -->
<section class="section band closing" id="list" aria-labelledby="list-title">
      <div class="wrap">
        <div class="closing__card">
          <p class="stamp" aria-hidden="true">Opens Feb. 1</p>
          <div>
            <p class="kicker">The 2027 season</p>
            <h2 id="list-title">Get on the list before the seeds go in.</h2>
            <p>Returning members pick first, and most years we are full by March. Leave your email and we will write once, the morning sign-ups open. That is the whole list.</p>
          </div>
          <form class="signup" data-slapform-success="You're on the list. Watch your inbox on February 1." action="{theme:if:slapform_form_id}https://api.slapform.com/{theme:config:slapform_form_id}{theme:endif}" method="POST" data-slapform>
<input class="slap-honey" type="text" name="slap_honey" tabindex="-1" autocomplete="off" aria-hidden="true">
            <label for="email">Your email</label>
            <div class="signup__row">
              <input id="email" name="email" type="email" autocomplete="email" required placeholder="you@example.com">
              <button class="btn" type="submit">Save my spot</button>
            </div>
            <p class="signup__msg" role="status"></p>
          </form>
        </div>
      </div>
      <img class="closing__hills" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hills.svg' ) ); ?>" alt="Screenprint of the farm's hills at sunrise, with the red barn and striped crop rows" width="640" height="300">
    </section>
<!-- /wp:html -->
