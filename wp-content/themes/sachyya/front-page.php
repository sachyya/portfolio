<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sachyya
 */

get_header(); ?>

<!--HOME-->
<section id="home" style="background: url( <?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?> ); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="wrap-hero-content">
          <div class="hero-content">
            <h1>नमस्ते</h1>
            <br>
            <span class="typed"></span>
          </div>
      </div>
      <div class="mouse-icon margin-20">
        <div class="scroll"></div>
      </div>
    </div>
  </div>
</section>
<!--/.HOME END-->

<!--ABOUT-->
<section id="about">
  <div class="col-md-6 col-xs-12 no-pad">
    <div class="bg-about"></div>
  </div>
  <div class="col-md-6 col-sm-12 col-xs-12 white-col">
    <div class="row">
      <!--OWL CAROUSEL2-->
      <div class="owl-carousel2">
        <div class="col-md-12">
          <div class="wrap-about">
            <div class="w-content">
              <p class="head-about">
                <?php echo get_theme_mod( 'sachyya_about_quote_setting' ); ?>
              </p>

              <h5 class="name">
                <?php echo get_theme_mod( 'sachyya_about_name_setting' ); ?>
              </h5>
              <img alt="signature" src="<?php echo get_theme_mod( 'sachyya_about_image_setting' ); ?>">
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 white-col">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
              <div class="wrap-about">
                <table class="w-content">
                  <tr>
                    <td class="title">Name </td>
                    <td class="break">:</td>
                    <td> <?php echo get_theme_mod( 'sachyya_about_name_setting' ); ?></td>
                  </tr>
                  <tr>
                    <td class="title">Phone </td>
                    <td class="break">:</td>
                    <td><a href="tel:<?php echo get_theme_mod( 'sachyya_about_phone_setting' ); ?>"><?php echo get_theme_mod( 'sachyya_about_phone_setting' ); ?></a></td>
                  </tr>
                  <tr>
                    <td class="title">Email </td>
                    <td class="break">:</td>
                    <td> <a href="mailto:s<?php echo get_theme_mod( 'sachyya_about_email_setting' ); ?>?Subject=Hello" target="_top"><?php echo get_theme_mod( 'sachyya_about_email_setting' ); ?></a></td>
                  </tr>
                  <tr>
                    <td class="title">Address </td>
                    <td class="break">:</td>
                    <td> <?php echo get_theme_mod( 'sachyya_about_address_setting' ); ?></td>
                  </tr>
                  <tr>
                    <td class="title">Skype </td>
                    <td class="break">:</td>
                    <td> <a href="skype:<?php echo get_theme_mod( 'sachyya_about_skype_setting' ); ?>?call"><?php echo get_theme_mod( 'sachyya_about_skype_setting' ); ?></a></td>
                  </tr>
                  <tr>
                    <td class="title">Instagram </td>
                    <td class="break">:</td>
                    <td><a target="_blank" href="<?php echo get_theme_mod( 'sachyya_about_instagram_setting' ); ?>"><?php echo get_theme_mod( 'sachyya_about_instagram_setting' ); ?></a></td>
                  </tr>
                  <tr>
                    <td class="title">Wordpress</td>
                    <td class="break">:</td>
                    <td><a target="_blank" href="<?php echo get_theme_mod( 'sachyya_about_wordpress_setting' ); ?>"><?php echo get_theme_mod( 'sachyya_about_wordpress_setting' ); ?></a></td>
                  </tr>
                  <tr>
                    <td class="title">Github</td>
                    <td class="break">:</td>
                    <td><a target="_blank" href="<?php echo get_theme_mod( 'sachyya_about_github_setting' ); ?>"><?php echo get_theme_mod( 'sachyya_about_github_setting' ); ?></a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.OWL CAROUSEL2 END-->
    </div>
  </div>
</section>
<!--/.ABOUT END-->

<!--WORK-->
<section class="grey-bg mar-tm-10" id="work">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Work</span>
        </h3>
        <p class="content-detail">
          <?php echo get_theme_mod( 'sachyya_work_quote_setting' ); ?>
        </p>
      </div>
      <div class="col-md-9 content-right">
        <!--PORTFOLIO IMAGE-->
        <ul class="portfolio-image">
          <?php
          // the query
          $the_query = new WP_Query( array( 'post_type' => 'sachyya_work' ) ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li class="col-md-6">
                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>"><?php the_post_thumbnail(); ?>
                  <div class="decription-wrap">
                    <div class="image-bg">
                       <p class="desc"><?php the_title(); ?></p>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </ul>
        <!--/.PORTFOLIO IMAGE END-->
      </div>
    </div>
  </div>
</section>
<!--/.WORK END-->

<!--SERVICES-->
<section class="white-bg" id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Services</span>
        </h3>
        <p class="content-detail">
          <?php echo get_theme_mod( 'sachyya_service_quote_setting' ) ?>
        </p>
      </div>
      <div class="col-md-9 content-right">
        <div class="row">
          <ul class="listing-item">
            <?php
            // the query
            $the_query = new WP_Query( array( 'post_type' => 'sachyya_service' ) ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

              <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                  <div class="col-md-4 col-sm-4">
                    <h3 class="icon-use">
                      c
                    </h3>
                    <p class="head-sm"><?php the_title(); ?></p>
                    <?php the_content(); ?>
                  </div>
                </li>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/.SERVICES END-->

<!--EMPLOYEMENT-->
<section class="grey-bg" id="employement">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Employement</span>
        </h3>
        <p class="content-detail"><?php echo get_theme_mod( 'sachyya_employement_quote_setting' ); ?></p>
      </div>
      <div class="col-md-9 content-right">
        <div class="row">

          <ul class="listing-item">
            <?php
              // the query
              $the_query = new WP_Query( array( 'post_type' => 'sachyya_employement' ) ); ?>

              <?php if ( $the_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <li>
                    <div class="col-md-6 col-sm-6">
                      <div class="wrap-card">
                        <div class="card">
                          <h2 class="year"><?php the_field( 'year' ); ?></h2>
                          <p class="job"><?php the_field( 'job' ); ?></p>
                          <p class="company">
                            <a target="_blank" href="<?php the_field( 'company_link' ); ?>"><?php the_field( 'company' ); ?></a>
                          </p>
                          <hr>
                          <div class="text-detail">
                            <?php the_content(); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>

              <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/.EMPLOYEMENT END-->

<!--SKILLS-->
<section class="white-bg" id="skill">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Skills</span>
        </h3>
        <p class="content-detail">
          <?php echo get_theme_mod( 'sachyya_skill_quote_setting' ); ?>
        </p>
      </div>
      <div class="col-md-9 content-right">
        <!--SKILLST-->
        <div class="skillst">
          <?php
          // the query
          $the_query = new WP_Query( array( 'post_type' => 'sachyya_skill' ) ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="skillbar" data-percent="<?php the_field( 'skill_level' ); ?>%">
                <div class="title head-sm">
                  <?php the_title(); ?>
                </div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no skills matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
        <!--/.SKILLST END-->
      </div>
    </div>
  </div>
</section>
<!--/.SKILLS END-->

<!--EDUCATION-->
<section class="grey-bg" id="education">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Education</span>
        </h3>
        <p class="content-detail"><?php echo get_theme_mod( 'sachyya_education_quote_setting' ); ?></p>
      </div>
      <div class="col-md-9 content-right">
        <div class="row">
          <ul class="listing-item">
          <?php
          // the query
          $the_query = new WP_Query( array( 'post_type' => 'sachyya_education' ) ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li>
                <div class="col-md-6 col-sm-6">
                  <div class="wrap-card">
                    <div class="card">
                      <h2 class="year"><?php the_title(); ?></h2>
                      <p class="job"><?php the_field( 'level' ); ?></p>
                      <p class="company"><?php the_field( 'institute' ); ?></p>
                      <hr>
                      <div class="text-detail">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no skills matched your criteria.' ); ?></p>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/.EDUCATION END-->

<!--TESTIMONIAL-->
<section id="testimonial">
  <div class="container">
    <div class="row wrap-testimonial">
      <div class="col-md-10 col-md-offset-1">
        <div class="owl-carousel">
          <?php
          // the query
          $the_query = new WP_Query( array( 'post_type' => 'sachyya_testimonial' ) ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="list-testimonial">
                <div class="content-testimonial">
                  <h3 class="testi">
                    “ <?php the_content(); ?> ”
                  </h3>
                  <p class="people">
                    <?php the_field( 'position' ); ?>
                  </p>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no skills matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="mask-testimonial"></div>
</section>
<!--/.TESTMONIAL END-->

<!--BLOG-->
<section class="grey-bg" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-small-center text-center">
          <span>Blog</span>
        </h3>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <p class="content-details text-center"><?php echo get_theme_mod( 'sachyya_blog_quote_setting' ); ?></p>
          </div>
        </div>
        <!--GRID BLOG-->
        <div class="grid">
           <?php
           $query = new WP_Query( array( 'posts_per_page' => 3, 'post_type' => 'post' ) );
            if ( $query->have_posts() ) :

                /* Start the Loop */
                while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="grid-item">
                  <div class="wrap-article" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>">
                     <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' => 'img-circle text-center' ) ); ?>
                    </a>
                    <p class="subtitle fancy">
                      <?php sachyya_posted_on(); ?>
                    </p>
                    <?php the_title( '<h3 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

                    <p class="content-blog">
                      <?php
                       echo wp_trim_words ( get_the_content( sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sachyya' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                      ) ), 20, ' .....' );

                      wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sachyya' ),
                        'after'  => '</div>',
                      ) );
                    ?>
                    </p>
                  <p class="content-blog">
                    <?php sachyya_entry_footer(); ?>
                  </p>
                  </div>
                </div>
                <?php endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>
        </div>
        <h3 class="read-more">
          <span><a href="<?php echo get_permalink( '38' ); ?>">Read More...</span></a>
        </h3>
        <!--/.GRID BLOG END-->
      </div>
    </div>
  </div>
</section>
<!--/.BLOG END-->

<!--CONTACT-->
<section id="contact" class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Contact</span>
        </h3>
        <p class="content-detail">
          &#9758 &#9758 &#9758 &#9758 &#9758 &#9758 &#9758 &#9758
        </p>

      </div>
      <div class="col-md-9 content-right">
        <?php echo do_shortcode( '[contact-form-7 id="29" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</section>
<!--/.CONTACT END-->

<?php
// get_sidebar();
get_footer();
