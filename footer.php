<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>




<!-- Footer -->
<footer class="page-footer font-small dark-background">


  <!-- Footer Links -->
  <div class="container text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 mt-lg-0 mt-3 ">

        <!-- Content -->
        
        <!--Section heading-->
    <h3 class="sign-up">Sign up for news, exclusive events & special offers</h3>
    <!--Section description-->

    <div class="row">



    <!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://pizza.us20.list-manage.com/subscribe/post?u=b0f4feccf049b7562744ecb54&amp;id=d949c7aa16" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <div class="row">
            <div class="md-form mb-0">
           
          <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
          <label for="mce-EMAIL" class="mdbInput fc-wide">Email <span class="asterisk">*</span></label>
          </div>
      </div>
<div class="row">
  <div class="col-md-6">
        <div class="md-form mb-0">
        <input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
              <label for="mce-FNAME" class="mdbInput">First Name  <span class="asterisk">*</span></label>
           
            </div>
  </div>
  <div class="col-md-6">
        <div class="md-form mb-0">
       
        <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
        <label for="mce-LNAME"  class="mdbInput">Last Name </label>
      </div>
  </div>
</div>





  <div class="">

    <div class="row datefield">
      <div class="col-md-6">
      <div class="md-form mb-0">

        <input class="birthday " type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day" class="form-control">
        <label for="mce-BIRTHDAY-day" class="mdbInput">dd </label>
  </div>
    </div>
  <div class="col-md-6">
  <div class="md-form mb-0">

      <input class="birthday " type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month" class="form-control">
      <label for="mce-BIRTHDAY-month" class="mdbInput">mm</label>
  </div>
  </div>
  <p class="">Birthday</p>
    </div>
  </div>	<div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_64ab03f3af339dfeb72f5e5fe_12fa2e0fcf" tabindex="-1" value=""></div>
      <div class="clear">
        <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button "></div>
      </div>
  </form>
  </div>

    <!--End mc_embed_signup-->




        

    </div>


    <!--Section: Contact v.2-->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-2 offset-lg-1">

        <!-- Links 
        <h2 class="h3-responsive font-weight-bold my-4">Opening Times</h2>
    <!--Section description

              <p class="no-line-break"><strong>Monday - Sunday </strong></p>
              <p >12pm 'til late</p>
              
-->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-3">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">True Romance</h2>
    <!--Section description-->
   
  




   
        <ul class="list-unstyled">
          <li>
          <p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Arch 11  <br>Water Lane<br>Camden NW18JZ </p>
          
        
          </li>
          <li>
          </li>
        <!--  <li>
          <a href="tel:+4402074506457"><p><i class="fas fa-phone mt-4"></i>&nbsp;&nbsp;020 7450 6457</a></p>
          </li>-->
          <li>
          <a href="mailto:camden@trueromance.pizza"><p><i class="fas fa-envelope fa-lg mt-3"></i>&nbsp;&nbsp;camden@trueromance.pizza</a></p>
          </li>
       
          <li>  
      <!--    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square fa-2x mt-4"></i> &nbsp;&nbsp;</a>
          <a href="https://twitter.com/"><i class="fab fa-twitter fa-2x mt-4"></i> &nbsp;&nbsp;</a> -->
          <a href="https://www.instagram.com/trueromancelondon/"><i class="fab fa-instagram  fa-lg mt-3"></i>&nbsp;&nbsp;@trueromancelondon</a>
          </li>
          <li class="mt-5" >
          <a href="careers"></i><small>Join the team</small></a> 
          </li>
          <li class="mt-1" >
          <a href="privacy-policy"><small>Privacy Policy</small></a> 
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <div class="row col-6 offset-3 col-lg-4 offset-lg-4">
      <img id="full-logo" src="http://localhost:8888/trueromance_landing/wp-content/themes/trueromance_landing/assets/img/tr_logo.png" alt="True Romance Logo">
    </div>
 <!-- Cloudsdale -->
     <div class="mt-5 text-center py-3" style="background: #000;"> 
    <a href="https://cloudsdale.co.uk/">   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudsdale_logo.svg" alt="Cloudsdale" style="height:20px">
  </div></a>


  <!-- Cloudsdale -->

</footer>



<?php wp_footer(); ?>

</body>
</html>
