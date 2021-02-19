<footer class="footer">
      <div class="container">
        <?php if(is_home()){
          ?>
        <section class="build-team">
          <h3>Build a dependable remote team.</h3>
          <a href="contact.php" class="btn footer-btn">Build your team</a>
        </section>
        <?php
        }?>
        <section class="footer-section">
          <div class="row">
            <div class="col-lg-5 cp-col">
              <?php

                  if ( has_custom_logo() ) {
                          echo '<img class="header__logo" src="' . esc_url(get_customizer_image( 'custom_logo' )) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                          echo '<h3>'. get_bloginfo( 'name' ) .'</h3>';
                  }
              ?>
              <ul class="footer-social">
                <li>
                  <?php if( get_theme_mod( 'decagon_facebookURL' ) and get_theme_mod( 'decagon_facebook_icon' )) {?>
                  <a
                    href="<?php echo esc_url( get_theme_mod( 'decagon_facebookURL' ) )?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><img src="<?php echo get_theme_mod( 'decagon_facebook_icon' )?>?>" alt="Facebook"
                  /></a>
                  <?php } ?>
                </li>
                <li>
                <?php if( get_theme_mod( 'decagon_twitterURL' ) and get_theme_mod( 'decagon_twitter_icon' )) {?>
                  <a
                    href="<?php echo esc_url( get_theme_mod( 'decagon_twitterURL' ) )?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><img src="<?php echo get_theme_mod( 'decagon_twitter_icon' )?>?>" alt="Twitter"
                  /></a>
                  <?php } ?>
                </li>
                <li>
                  <?php if( get_theme_mod( 'decagon_instagramURL' ) and get_theme_mod( 'decagon_instagram_icon' )) {?>
                  <a
                    href="<?php echo esc_url( get_theme_mod( 'decagon_instagramURL' ) )?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><img src="<?php echo get_theme_mod( 'decagon_instagram_icon' )?>?>" alt="Instagram"
                  /></a>
                  <?php } ?>
                </li>
                <li>
                  <?php if( get_theme_mod( 'decagon_linkedinURL' ) and get_theme_mod( 'decagon_linkedin_icon' )) {?>
                  <a
                    href="<?php echo esc_url( get_theme_mod( 'decagon_linkedinURL' ) )?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><img src="<?php echo get_theme_mod( 'decagon_linkedin_icon' )?>?>" alt="LinkedIn"
                  /></a>
                  <?php } ?>
                </li>
              </ul>
              <p class="copyright-text">
                All rights reserved. ©
                <?php echo date("Y"); ?>
                <span>Decagon</span>
              </p>
            </div>
            <div class="col-lg-2 col-6 il-col">
              <?php if (is_active_sidebar('footer_link')): ?>
                  <?php dynamic_sidebar('footer_link');?>
              <?php endif;?>
            </div>
            <div class="col-lg-2 col-6 l-col">
              <?php if (is_active_sidebar('footer_location')): ?>
                    <?php (dynamic_sidebar('footer_location'));?>
              <?php endif;?>
            </div>
            <div class="col-lg-3 cu-col">
              <?php if (is_active_sidebar('footer_contact')): ?>
                    <?php dynamic_sidebar('footer_contact');?>
              <?php endif;?>
            </div>
          </div>
        </section>
      </div>
    </footer>
    <?php
    wp_footer();
    ?>
  </body>
</html>