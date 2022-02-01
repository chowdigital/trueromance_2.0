<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-1">

<div class="view full-page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/sky.png');  background-repeat: no-repeat; background-position: left; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="mask justify-content-center align-items-center d-none d-lg-flex">

  <img class="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/collage.png" alt="True Romance Collage">


</div>
<div class="mask justify-content-center align-items-center d-flex d-lg-none">

  <img class="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/collageIpad.png" alt="True Romance Collage">


</div>

<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 




<main class="container">


  <section class="pt-6 pb-6 z-depth-2">
    <div class="row">
      <div class="openbook-image-box col-12 col-lg-6" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="openbook-content-box col-12 col-lg-6 d-flex flex-column justify-content-center">
<div>
     </div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="https://www.designmynight.com/london/whats-on/daytime/true-romance-special-preview?t=tickets"><button type="button" class="btn btn-primary waves-effect waves-light">Buy Tickets</button></a>

      </div>
    </div>
  </section>
  <section>
  <div class="container mt-5 mb-5">
<div class="row col-md-6 offset-md-6 col-lg-4 offset-lg-8">
      <img id="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/pieslicedive.svg" alt="True Romance Logo">
    </div>

  </div>
  </section>
  <!---
  <section class="pt-6 pb-6 z-depth-2">
    <div class="row">
  <div class="p-5 blog-content-box">
    <div class="text-center">
        <h2 class="underline-heading pt-5 pb-3 mb-5">What's going on at True Romance</h2> 
    </div>


    <div class="blog-post-container">
                <?php $the_query = new WP_Query( 'cat=1&posts_per_page=6' );
                    if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                         <div class="blog-post-list mb-5">
                            <div class="view overlay hm-white-slight mb-4 thumb-wrapper square-img black-outline" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            </div>
                            <h3 class="font-weight-bold"> <?php the_title(); ?> </h3>
                            <div class="" >  <?php the_excerpt(); ?>  </div>
                            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Read more</button></a>
                    </div>
                <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>
    </div>
    <div class="text-center">
    <a href="<?php echo get_home_url(); ?>/whats-on/"><button type="button" class="btn btn-green">See All</button></a>
    </div>
              </div></div>
</section>-->
  
<section class="pt-6 pb-6 z-depth-2">
    <div class="row">
  <div class="p-5 blog-content-box">

<?php echo do_shortcode("[instagram-feed]"); ?>
              </div> </div></section>
</main><!-- #main -->



<?php get_footer(); ?>