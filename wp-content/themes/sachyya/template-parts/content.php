<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sachyya
 */

?>

<div class="grid-item">
  <div class="wrap-article" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
  	 <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' => 'img-circle text-center' ) ); ?>
    </a>
    <p class="subtitle fancy">
      <?php sachyya_posted_on(); ?>
    </p>
    <?php
    	if ( is_single() ) {
    		the_title( '<h3 class="title">', '</h3>' );
    	} else {
    		the_title( '<h3 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    	}

    if ( 'post' === get_post_type() ) : ?>
    <?php
    endif; ?>

    <p class="content-blog">
      <?php
			echo wp_trim_words( get_the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sachyya' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) ), 30, ' . . .' );

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
