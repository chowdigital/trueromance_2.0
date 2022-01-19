<?php /* Template Name: Pagination */ get_header(); ?>



<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

</div>


  <main class="container pt-5 overlap-cover">




  <section class="pt-6 pb-6 z-depth-2">
    <div class="row">
  <div class="p-5 blog-content-box">
    <div class="text-center">
        <h2 class="underline-heading pt-5 pb-3 mb-5">What's on at St John's Tavern</h2> 
    </div>


    <div class="blog-post-container">
                 <!--Grid row-->
  <div class="blog-post-container">

<!--- my loop with Pagenation -->
<?php 
//get the current page
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

//pagination fixes prior to loop
$temp =  $query;
$query = null;

//custom loop using WP_Query
$query = new WP_Query( array( 
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'ASC' 
) ); 

//set our query's pagination to $paged
$query -> query('cat=1&posts_per_page=12'.'&paged='.$paged);

if ( $query->have_posts() ) : 
 while ( $query->have_posts() ) : $query->the_post();
  ?>
      
      <div class="blog-post-list mb-5">
                            <div class="view overlay hm-white-slight mb-4 thumb-wrapper square-img black-outline" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            </div>
                            <h3 class="font-weight-bold"> <?php the_title(); ?> </h3>
                            <div class="" >  <?php the_excerpt(); ?>  </div>
                            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-white waves-effect waves-light">Read more</button></a>
                    </div>
<?php endwhile;?>
</div>
<?php //pass in the max_num_pages, which is total pages ?>
<div class="pagenav">
  <div class="alignleft"><?php previous_posts_link('Previous', $query->max_num_pages) ?> </div>
  <div class="alignright"><?php next_posts_link('Next', $query->max_num_pages) ?> </div>


</div>

<?php endif; ?>

<?php //reset the following that was set above prior to loop
$query = null; $query = $temp; ?>
<!--- my loop with Pagenationend  -->
    </div>
  
              </div></div>
</section>

 
 



</main>

<?php get_footer(); ?>


