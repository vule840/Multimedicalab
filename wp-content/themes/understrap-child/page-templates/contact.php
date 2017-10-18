<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- <?php echo esc_html( $container ); ?> -->
<div class="wrapper" id="full-width-page-wrapper">

	<div id="contact" class="fluid-contanier" id="content">
	<div class="row">
		<!--1. MAPA -->

		<div class="col-md-6 content-area">
				
			
			  <!-- <div style="height: 500px;" id="map"></div> --> 

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.297857572528!2d15.920154815711694!3d45.80529281863922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x727904eafcb968d4!2sSpin+City+-+car+sharing!5e0!3m2!1sen!2shr!4v1498056096539" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>


		</div>

		<!--2. KOLUMNE -->

		<div class="col-md-6 content-area" id="ljubicasto">
				
			<div class="row">
				<div class="col-md-4 offset-md-2 text-xs-center col-sm-12 mali_kontakt">
					
				
					<h2><?php pll_e(' Contact');?></h2>


						<p><strong><?php pll_e(' Address');?></strong></p>
						<p><?php pll_e(' Zagrebačka cesta 143 A');?></p>
						<p><?php pll_e(' 10000 Zagreb');?></p>	

						<p><strong><?php pll_e(' Customer support');?></strong></p>
						<p><?php pll_e(' +3851 4440 051');?></p>
						
						<p><strong>Email</strong></p>
						<p><a href="mailto:rentals@spincity.hr">rentals@spincity.hr</a></p>

						
					<!-- <p id="zute_ikone"><i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-linkedin" aria-hidden="true"></i></p>  -->


				</div>

				<!-- između -->
					<div class="col-md-4 text-xs-center mali_kontakt">
					
				
					<h2><?php pll_e(' Working hours');?></h2>


						<p><strong><?php pll_e(' Reservations');?></strong></p>
						<p><?php pll_e(' Mon - Fri: 08:00 – 19:00');?></p>
						<p><?php pll_e(' Sat: 09:00 – 15:00');?></p>	

						<p><strong><?php pll_e(' Office');?></strong></p>
						<p><?php pll_e(' Mon - Fri: 08:00 – 19:00');?></p>
						<p><?php pll_e(' Sat: 08:00 – 15:00');?></p>
						<p><?php pll_e(' Sun: 08:00 – 12:00');?></p>
						

						<a href="https://spincity.rentals/#reservation" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' RESERVATIONS');?></a>
						<!--<button type="button" class="btn btn-primary"><a href="http://testiranje1111.tk/spin/#reservation">RESERVATIONS</a></button>  --> 

					</div>



			</div>	

				
		

				</div>





		
			</div>
		
		</div>	

		<!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<!--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNRPuo48rvaH6V48q9MFmQSuflaOp-Frc&sensor=false"></script>﻿  --> 
<!--  <script type="text/javascript">

(function () {
    console.log("radi na kontakt");

var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

var myLatlng = new google.maps.LatLng(45.809398,15.970041);
var mapOptions = {
  zoom: 12,
  center: myLatlng,
  icon: image,
  map: map
}


var map = new google.maps.Map(document.getElementById("map"), mapOptions);

var marker = new google.maps.Marker({
    position: myLatlng,
    title:"Hello World!"
});

//2. icon

var myLatlng2 = new google.maps.LatLng(45.804688,15.978740);
var mapOptions2 = {
  zoom: 12,
  center: myLatlng2
}


var map = new google.maps.Map(document.getElementById("map"), mapOptions2);

var marker2 = new google.maps.Marker({
    position: myLatlng2,
    title:"Hello World2!"
});

//3. icon

var myLatlng3 = new google.maps.LatLng(45.803998,15.993275);
var mapOptions3 = {
  zoom: 12,
  center: myLatlng3
}


var map = new google.maps.Map(document.getElementById("map"), mapOptions3);

var marker3 = new google.maps.Marker({
    position: myLatlng3,
    title:"Hello World3!"
});



// To add the marker to the map, call setMap();
marker.setMap(map); 
marker2.setMap(map);
marker3.setMap(map); 
})();

	


</script>
 -->
<?php get_footer(); ?>
