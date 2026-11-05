<?php
/**
 * Title: Write to the farm: Write, call, or come down the lane
 * Slug: farm-csa/contact-reach
 * Categories: farm-csa
 */
?>
<!-- wp:html -->
<section class="section band closing" aria-labelledby="reach-title">
      <div class="wrap">
        <div class="section-head">
          <div>
            <p class="kicker">Three ways in</p>
            <h2 id="reach-title">Write, call, or come down the lane</h2>
          </div>
          <p>The form lands in the same inbox as our email. The phone rings in the packing shed, so let it ring a while, or leave a message and we will call back at lunch.</p>
        </div>
        <div class="contact">
          <div class="packet-wrap">
            <form class="packet contact-form" aria-labelledby="write-title" data-slapform-success="Got it. Your letter is in the crate, and we will write back after chores." action="{theme:if:slapform_form_id}https://api.slapform.com/{theme:config:slapform_form_id}{theme:endif}" method="POST" data-slapform>
<input class="slap-honey" type="text" name="slap_honey" tabindex="-1" autocomplete="off" aria-hidden="true">
              <div class="packet__top"><span>Lot 00 · Letters</span><span class="reg" aria-hidden="true"></span></div>
              <h3 class="packet__name" id="write-title">Write to the farm</h3>
              <p class="packet__variety">Sow one question. Harvest a reply within a day.</p>
              <label for="contact-name">Your name</label>
              <input id="contact-name" name="name" type="text" autocomplete="name" required>
              <label for="contact-email">Your email</label>
              <input id="contact-email" name="email" type="email" autocomplete="email" required placeholder="you@example.com">
              <label for="contact-message">Your message</label>
              <textarea id="contact-message" name="message" rows="6" required placeholder="Which share fits two people who cook every night?"></textarea>
              <button class="btn" type="submit">Send the letter</button>
              <p class="signup__msg" role="status"></p>
            </form>
          </div>
          <div class="contact__side">
            <div class="tag">
              <h3>The farm stand</h3>
              <dl class="packet__back">
                <dt>Address</dt><dd>E4410 County Road B, Viroqua, WI 54665. Look for the painted tomato on the mailbox.</dd>
                <dt>Stand hours</dt><dd>Friday to Sunday, 9 am to 6 pm</dd>
                <dt>Honor box</dt><dd>Every day. Pay in the coffee can, or tap a card on the reader.</dd>
                <dt>Phone</dt><dd>(608) 555-0147</dd>
                <dt>Email</dt><dd><a href="mailto:hello@bramblecut.farm">hello@bramblecut.farm</a></dd>
              </dl>
            </div>
            <div class="note">
              <h3>Thursday is pickup day</h3>
              <p>Crates are packed by noon and waiting in the barn cooler from 3 to 7 pm. Town members pick up at the same hours in all six towns.</p>
              <ul>
                <li>Bring last week's crate back, rinsed if you can.</li>
                <li>Running late? Call the shed and we will leave yours in the cooler overnight.</li>
                <li>Away for a week? Tell us by Monday and we donate your crate to the Viroqua pantry.</li>
              </ul>
              <p class="sig">Juniper, CSA and farm stand</p>
            </div>
          </div>
        </div>
      </div>
      <img class="closing__hills" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hills.svg' ) ); ?>" alt="Screenprint of the farm's hills at sunrise, with the red barn and striped crop rows" width="1440" height="320">
    </section>
<!-- /wp:html -->
