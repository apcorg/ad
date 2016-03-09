<section class="login-form pvp-3">
  <div class="row">
    <div class="columns small-8 small-offset-2">
      <h5 class="montse">Log in to your account</h5>
      <?php
          // split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)A
          print drupal_render($form['name']);
          print drupal_render($form['pass']);
      ?>

      <?php
          // render login button
          print drupal_render($form['form_build_id']);
          print drupal_render($form['form_id']);
          print drupal_render($form['actions']);

      ?>

      <div class="user-login-links">
        <span class="password-link"><a href="/user/password"><?php print t('Forgot your password?'); ?></a></span>
        <span class="password-link"><a href="/user/register"><?php print t('Need to create an account?'); ?></a></span>
      </div>
      <!-- /user-login-custom-form -->
    </div>
  </div>
</section>

