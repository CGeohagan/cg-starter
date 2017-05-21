<?php 
/**
 * Archive header
 *
 * @package cg_starter
 */
?>
<header class="archive-header">
	<h1 class="archive-title">
		<?php
			// Formatting based on the Underscores theme
			// https://github.com/Automattic/_s/blob/master/archive.php
			if ( is_category() ) :
				single_cat_title();

			elseif ( is_tag() ) :
				single_tag_title();

			elseif ( is_tax() ) :
				single_term_title();

			elseif ( is_author() ) :
				printf( __( 'Author: %s', 'cg-starter' ), '<span class="vcard">' . get_the_author() . '</span>' );

			elseif ( is_day() ) :
				printf( __( 'Day: %s', 'cg-starter' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Month: %s', 'cg-starter' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'cg-starter' ) ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Year: %s', '_s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'cg-starter' ) ) . '</span>' );
			else :
				_e( 'Archives', 'cg-starter' );

			endif;
		?>
	</h1>
</header><!-- .page-header -->
