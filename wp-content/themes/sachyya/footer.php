<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sachyya
 */

?>

    <!--FOOTER-->
    <footer>
      <div class="footer-top">
        <ul class="socials">
          <li class="facebook">
            <a href="<?php echo get_theme_mod( 'sachyya_social_media_fb_setting' ); ?>" data-hover="Facebook">Facebook</a>
          </li>
          <li class="twitter">
            <a href="<?php echo get_theme_mod( 'sachyya_social_media_twitter_setting' ); ?>" data-hover="Twitter">Twitter</a>
          </li>
          <li class="gplus">
            <a href="<?php echo get_theme_mod( 'sachyya_social_media_google_setting' ); ?>" data-hover="Google +">Google +</a>
          </li>
        </ul>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod( 'sachyya_footer_logo_setting' );?>" alt="crafted with love" class="center-block" /></a>
                </div>
        </div>
      </div>
    </footer>
    <!--/.FOOTER-END-->

  <!--/.CONTENT END-->
  </div>
<!--/.CONTENT-WRAP END-->
</div>

<?php wp_footer(); ?>

</body>
</html>
