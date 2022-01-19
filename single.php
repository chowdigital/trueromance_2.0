<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordpress-bootstrap-starter-theme
 */

get_header();
?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

</div>
<main id="primary" class="site-main single-post-main container pb-6">

		<div class="post-thumb z-depth-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/stjohn.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>


		<div class="">
		
		<div class="default-content-box overlap-post z-depth-3">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
		
  <a href="<?php echo get_home_url(); ?>/book"><button type="button" class="btn btn-white">Book a table</button></a>

</div>

	</div>

	</main><!-- #main -->

<?php

get_footer();
