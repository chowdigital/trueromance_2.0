<?php /* Template Name: Book */ get_header(); ?>


<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>
<main id="primary" class="site-main container  pt-6 pb-6">
  <div class="z-depth-3">
  <div class="openbook-content-box overlap-cover">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

		endwhile; // End of the loop.
		?>
        <div class="col-md-8 offset-md-4 col-lg-6 offset-lg-3">
                <link rel="stylesheet" type="text/css" href=https://onsass.designmynight.com/?background-color=%23eeebe2&primary-color=%236DA8A6&body-text-color=%23000000&outer-border-color=gray><script src="//widgets.designmynight.com/bookings-partner.min.js" dmn-booking-form="true" venue="6156fc9a21d41112011e1a83" hide-offers="false" hide-powered-by="false" search-venues="false" monday-first="true" locale="undefined" show-type-first="true"></script>
                </div>
</div>
	</div>
	</main><!-- #main -->



 
<style>

#dmn-partner-widget{
    max-width:100%;
    color:#121B23;
}
#dmn-partner-widget .offers-header{
    border:none;
    padding-bottom: 1em;
}
#dmn-partner-widget .offers-header .offers-header__button{
    padding:1em;
}
#dmn-partner-widget .offers-header .offers-header__button{
    border-radius: 0;
}
#dmn-partner-widget .stage .dropdown.dropdown--open:not(.dropdown--no-shadow){
    box-shadow: none;
    border-bottom: none;
}
#dmn-partner-widget #dmn-widget-inner, #dmn-partner-widget #dmn-widget-inner hr.dashed{
    border: none;
    box-shadow: none;
    border-bottom: none;
}
#dmn-partner-widget #dmn-widget-inner .time-selection-columns .from-list {
    border-right: none;
}
#dmn-partner-widget .button{
    border: 1px solid #4d8880;
    border-radius: 0;
    box-shadow: none;
    margin: 1.5em 1em;
}
#dmn-partner-widget .date-selector .vdp-datepicker .vdp-datepicker__calendar header {
    line-height: 40px;
}

    </style>
                



<?php get_footer(); ?>
