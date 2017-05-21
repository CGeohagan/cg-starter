<?php 
/**
 * Archive pagination
 *
 * @package cg_starter
 */
?>
<nav id="nav-below">
	<div class="nav-previous"><?php next_posts_link( __( 'Older posts', 'cg-starter' ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'cg-starter' ) ); ?></div>
</nav><!-- #nav-above -->