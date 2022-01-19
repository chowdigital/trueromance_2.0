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



</div>
<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

  <div class="mask gradient-custom" style="width: 100%; height: 100%;">

    </div>
  </div>
		<main id="primary" class="site-main container pb-6">
		<?php if ( has_post_thumbnail() ) { ?>

		<div class="post-thumb z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

		
		<?php	} else { ?>
		<div class="post-thumb z-depth-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/stjohn.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

		<?php } ?>

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
