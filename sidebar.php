<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage wbsPress
 * @since wbsPress 1.0.0
 */

?>
<aside id="sidebar" class="small-12 large-4 columns">
	<?php do_action( 'wbsPress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'wbsPress_after_sidebar' ); ?>
</aside>