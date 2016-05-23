<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sachyya
 */

?>

<div class="wrap-card">
  <div class="card">
    <?php the_title( '<h2 class="title">', '</h2>' ); sachyya_entry_footer();?>
    <p class="post-date">
      <?php sachyya_posted_on();?>
    </p>
    <hr>
    <div class="text-detail">
        <?php the_content(); ?>
    </div>
  </div>
</div>
