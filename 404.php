<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
* @subpackage Needs
* @since Needs 1.0
*/

get_header(); ?>
	<div id="primary" class="pagemid">
		<div class="inner">	
			<div class="entry-content">
				<div class="error_404">
					<h2>Ooops... Error 404</h2>
					<h5>We're sorry, but the page you are looking for doesn't exist.</h5>
					<p class="center"><a class="btn large magenta flat" href="<?php echo home_url(); ?>"><span>Go To Homepage</span></a></p>
				</div>			
			</div><!-- .entry-content -->	
		</div><!-- .inner -->
	</div><!-- .pagemid -->
<?php
get_footer();