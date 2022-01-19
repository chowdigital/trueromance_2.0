<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/placehold.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
<div class="vimeo-wrapper">
   <iframe src="https://player.vimeo.com/video/563171556?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
<!--
<div class="view full-page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ob1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->


<div class="mask d-flex justify-content-center align-items-center index3">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
 
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-light.svg" alt="">
  
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

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
      <header class="entry-header underline-heading pb-3 pt-5 mb-5">
	          	<?php the_title( '<h2>', '</h2>' ); ?>
	    </header><!-- .entry-header --></div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="mailto:info@oldbrompton.co.uk"><button type="button" class="btn btn-white waves-effect waves-light">Make a reservation</button></a>

      </div>
    </div>
  </section>
  <section>
  <div class="text-box col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            <h4>An old local, refurbed  &amp; reborn</h4>
            <h3>A free of tie selection of 20 beers on tap & quality wines</h3>
          </div>
  </section>
  <section class="pt-6 pb-6 z-depth-2">
    <div class="row">
  <div class="p-5 blog-content-box">
    <div class="text-center">
        <h2 class="underline-heading pt-5 pb-3 mb-5">What's on at St John's Tavern</h2> 
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
                            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-white waves-effect waves-light">Read more</button></a>
                    </div>
                <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>
    </div>
    <div class="text-center">
    <a href="<?php echo get_home_url(); ?>/whats-on/"><button type="button" class="btn btn-green">See All</button></a>
    </div>
              </div></div>
</section>
  
</main><!-- #main -->



<?php get_footer(); ?>