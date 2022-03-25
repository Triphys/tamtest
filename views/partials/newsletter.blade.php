<div class="newsletterContent wrap container px-4">
  <a href="" class="newsletterContent--close" alt="stäng"><img src="@asset('images/icons/close.svg')" alt="stäng"></a>
  <div class="row justify-content-center">
    <div class="newsletterContent--container col-12">
      <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
        <h1>Subscribe to our Newsletter</h1>
      <?php else: ?>
        <h1>Anmäl dig till vårt Nyhetsbrev</h1>
      <?php endif; ?>
      <div id="mc_embed_signup">
        <form action="https://ihrs.us5.list-manage.com/subscribe/post?u=b0156f6f41760a2d755bbed22&amp;id=fc930cbc2d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <input type="text" value="" name="NAME" placeholder="Name" class="required" id="mce-NAME">
              <?php else: ?>
                <input type="text" value="" name="NAME" placeholder="Namn" class="required" id="mce-NAME">
              <?php endif; ?>
            </div>
            <div class="mc-field-group">
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL">
              <?php else: ?>
                <input type="email" value="" name="EMAIL" placeholder="Emailadress" class="required email" id="mce-EMAIL">
              <?php endif; ?>
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b0156f6f41760a2d755bbed22_fc930cbc2d" tabindex="-1" value=""></div>
            <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <div class="clear"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            <?php else: ?>
              <div class="clear"><input type="submit" value="Skicka" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            <?php endif; ?>
          </div>
        </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
      <script type='text/javascript'>
        (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[2]='NAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);
        $mcj.extend( $mcj.validator.messages, {
          required: "Detta f&auml;lt &auml;r obligatoriskt.",
          remote: "Var snäll och åtgärda detta fält.",
          maxlength: $mcj.validator.format( "Du f&aring;r ange h&ouml;gst {0} tecken." ),
          minlength: $mcj.validator.format( "Du m&aring;ste ange minst {0} tecken." ),
          rangelength: $mcj.validator.format( "Ange minst {0} och max {1} tecken." ),
          email: "Ange en korrekt e-postadress.",
          url: "Ange en korrekt URL.",
          date: "Ange ett korrekt datum.",
          dateISO: "Ange ett korrekt datum (&Aring;&Aring;&Aring;&Aring;-MM-DD).",
          number: "Ange ett korrekt nummer.",
          digits: "Ange endast siffror.",
          equalTo: "Ange samma v&auml;rde igen.",
          range: $mcj.validator.format( "Ange ett v&auml;rde mellan {0} och {1}." ),
          max: $mcj.validator.format( "Ange ett v&auml;rde som &auml;r mindre eller lika med {0}." ),
          min: $mcj.validator.format( "Ange ett v&auml;rde som &auml;r st&ouml;rre eller lika med {0}." ),
          creditcard: "Ange ett korrekt kreditkortsnummer.",
          pattern: "Ogiltigt format."
        } );
      </script>

    </div>
  </div>
</div>