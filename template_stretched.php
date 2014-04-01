<?php
/*
Template Name: Fullwidth

* @package WordPress
* @subpackage Needs
* @since Needs 1.0

*/
?>
<?php get_header(); ?>

	<div class="pagemid_section">
	
		<?php if (have_posts()): while (have_posts()): the_post(); ?>

		<?php the_content(); ?> 

		<?php endwhile; ?>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'THEME_FRONT' ), '<span class="edit-link">', '</span>' ); ?>

	</div>
	<!-- .pagemid_section -->

<?php get_footer(); ?>