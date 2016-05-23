<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sachyya
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 primary-sidebar">
    <div class="grid" style="position: relative; height: 1104px;">
      <div class="grid-item" style="position: absolute; left: 0px; top: 0px;">
            <div class="wrap-article">
    	       <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        </div>
    </div>
</div><!-- #secondary -->
