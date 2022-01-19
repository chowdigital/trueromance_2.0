<?php /* Template Name: Menu*/ get_header(); ?>


<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>
<main id="primary" class="site-main container">
  

    <div class="row">



    <div class="menu-post-container">
                <?php $the_query = new WP_Query( 'cat=2&posts_per_page=3' );
                    if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                        
                        <section class="pt-6 pb-6 z-depth-2">        
                        <a href="<?php echo get_permalink() ?>" class="row">
                          <div class="openbook-image-box col-12 col-lg-6" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
                          <div class="text-center openbook-content-box col-12 col-lg-6 d-flex flex-column justify-content-center"><div>
                              <header class="entry-header underline-heading pb-3 pt-5 mb-5">
                                      <?php the_title( '<h2>', '</h2>' ); ?>
                              </header><!-- .entry-header -->
                            </div>
                           </div>
                    </a>
                        </section>

                <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>
    </div>

              </div>

	</main><!-- #main -->

<?php get_footer(); ?>


