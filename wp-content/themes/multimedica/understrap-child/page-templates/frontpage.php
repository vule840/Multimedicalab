<?php
/**
 * Template Name: FrontPage
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

	<div class="fluid-contanier" id="content">
		
		<h1 id="offer" class="text-center naslovi"><?php pll_e('Offer');?></h1>
		
			 
	<!-- 1. row -->	
		
		<!-- ZA MOBITELE I TABLETE -->	

		<div class="row ponude hidden-xl-up">	
			
			<div class="col-xl-6 col-sm-12 bg_2 text-center">
				
					<h2 class="hidden-xl-up"><?php pll_e(' Rentals from 177 kn per day? <br>Of course!');?></h2>  <!-- Rentals from 88 kn per day?<br> Of course!	 --> 

					<p><?php pll_e(' Get UP! for 177 kunas per day!');?></p>
					<p><?php pll_e(' Unlimited mileage, basic coverage and tax included.');?></p>
					<p><?php pll_e(' No hidden fees!');?></p>
					<p><?php pll_e(' The offer is valid till 15th July 2017.');?></p>
					<p><?php pll_e(' Click to save on your next rental today.');?></p>
				<!--  --> 
					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW ');?></a>
					<img class="pos_slika hidden-xs-down" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk1.png" alt="">
				</div>	
				<div class="col-xl-6 col-sm-12"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika.jpg" alt=""></div>
		</div>

		<!-- ZA DESKTOP -->	

		<div class="row ponude hidden-lg-down">	
			<div class="col-xl-6 col-sm-12"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika.jpg" alt=""></div>
			<div class="col-xl-6 col-sm-12 bg_2 text-center">
				
					<h2 class="hidden-lg-down"><?php pll_e(' Rentals from 177 kn per day? <br>Of course!');?></h2> 	

					<p><?php pll_e(' Get UP! for 177 kunas per day!');?></p>
					<p><?php pll_e(' Unlimited mileage, basic coverage and tax included.');?></p>
					<p><?php pll_e(' No hidden fees!');?></p>
					<p><?php pll_e(' The offer is valid till 15th July 2017.');?></p>
					<p><?php pll_e(' Click to save on your next rental today.');?></p>
				<!--  --> 
					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW ');?></a>
					<img class="pos_slika hidden-xs-down" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk1.png" alt="">
				</div>	
			
		</div>



	<!-- 2. row -->	

		<!-- ZA MOBITELE I TABLETE -->	
	

		<div class="row ponude hidden-xl-up">
			

			<div class="col-xl-6 col-sm-12 bg_1 text-center desno">
				
				<h2><?php pll_e(' We keep you safe');?></h2>	

					<p><?php pll_e(' Add a full insurance package to your bookings.');?></p>
					<p><?php pll_e(' We are here to help you explore Croatia with safety.');?></p>
					<p><?php pll_e(' Relax and enjoy your holidays..');?></p>
					

					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW');?></a>
					<img class="pos_slika2 hidden-xs-down" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk2.png" alt="">
				</div>

				<div class="col-xl-6 col-sm-12 lijevo"><img class="srednja_slika" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika_2.jpg" alt=""></div>	
			
		</div>

		<!-- ZA DESKTOP -->	
		<div class="row ponude hidden-lg-down">
			<div class="col-xl-6 col-sm-12 bg_1 text-center desno">
				
				<h2><?php pll_e(' We keep you safe');?></h2>	

					<p><?php pll_e(' Add a full insurance package to your bookings.');?></p>
					<p><?php pll_e(' We are here to help you explore Croatia with safety.');?></p>
					<p><?php pll_e(' Relax and enjoy your holidays..');?></p>

					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW');?></a>
					<img class="pos_slika2" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk2.png" alt="">
				</div>
			<div class="col-xl-6 col-sm-12 lijevo"><img style="float:right" class="srednja_slika" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika_2.jpg" alt=""></div>	
		</div>
	

	<!-- 3. row -->


		<!-- ZA MOBITELE I TABLETE -->	

		<div class="row ponude hidden-xl-up">
			
			<div class="col-xl-6 col-sm-12 bg_2 text-center">
				<div class="offset-md-3 col-md-6">
					<h2><?php pll_e(' Next door green rentals');?></h2>	

					<p><?php pll_e(' Have you ever driven full electric car? ');?></p>
					<p><?php pll_e(' Rent green vehicles, feel the power and save the environment! ');?></p>
					

					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW');?></a>
					
				</div>
				<img class="pos_slika3 hidden-xs-down" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk3.png" alt="">

				</div>	

				<div class="col-xl-6 col-sm-12"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika_3.jpg" alt=""></div>
		</div>

		<!-- ZA DESKTOP -->	

		<div class="row ponude hidden-lg-down">
			<div class="col-xl-6 col-sm-12"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Spin_slika_3.jpg" alt=""></div>
			<div class="col-xl-6 col-sm-12 bg_2 text-center">
				<div class="offset-md-3 col-md-6">
					<h2><?php pll_e(' Next door green rentals');?></h2>	

					<p><?php pll_e(' Have you ever driven full electric car? ');?></p>
					<p><?php pll_e(' Rent green vehicles, feel the power and save the environment! ');?></p>
					

					<a href="#" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' BOOK NOW');?></a>
					
				</div>
				<img class="pos_slika3 hidden-xs-down" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/06/Ponude_slk3.png" alt="">

				</div>	
		</div>


	<!-- 4. Car rental  --> 


			<div class="col-md-12 content-area" id="primary">
				
				<h1 id="why" class="text-center naslovi"><?php pll_e(' Why next door car rental?');?></h1>


			</div><!-- #primary --> 
		
	
	<!-- 5. cards --> 
  

			<div class="col-md-12 content-area bg" id="primary">
				
				<div class="fluid-contanier">
					<div class="row karte">
						
						
							  <div class="col-sm-6 col-xl-3">
							    <div class="card text-center">
							   <h3><?php pll_e(' Quick and easy booking ?');?></h3>

							    <div class="card-block">
							      <span><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Icon_1-07.png" alt=""></span>
							      <p class="card-text"><?php pll_e(' Few clicks and your adventure can start! ?');?></p>
							  
							    </div>
							  </div>
							  </div>
							  <div class="col-sm-6 col-xl-3">
							     <div class="card text-center">
							    <h3 class="card_sredina"><?php pll_e(' Free delivery ?');?>  </h3>
							    <div class="card-block">
							      <span><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Icon_2-07.png" alt=""></span>
							      <p class="card-text"><?php pll_e(' Besides predefined locations, we will deliver a car next to your place within the city. ?');?></p>
							      
							    </div>
							  </div>
							  </div>
							   <div class="col-sm-6 col-xl-3">
							    <div class="card text-center">
								    <h3 class="card_sredina"><?php pll_e(' Trust & safety');?></h3>
								    <div class="card-block">
								      <span><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Icon_3-07.png" alt=""></span>
								      <p class="card-text"><?php pll_e(' Add full insurance to your rent, be safe and drive carefree! ');?></p>
							      
							    </div>
							  </div>
							  </div>
							  <div class="col-sm-6 col-xl-3">
							    <div class="card text-center">
								    <h3><?php pll_e(' Convenience and eco fleet');?></h3>
								    <div class="card-block">
								      <span><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2017/05/Icon_4-07.png" alt=""></span>
								      <p class="card-text"><?php pll_e(' We offer new and reliable eco fleet for your pleasant journey! ');?></p>
							      
							    </div>
							  </div>
							  </div>
							
				</div><!-- row end -->	





					<!--<div class="card-group">
							  <div class="card text-center">
							   <h3>Quick and easy booking</h3>

							    <div class="card-block">
							      <span><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/05/Icon_1-07.png" alt=""></span>
							      <p class="card-text">Few cklicks and your adventure can start!</p>
							     
							    </div>
							  </div>

							  <div class="card text-center">
							    <h3 class="card_sredina">Free delivery  </h3>
							    <div class="card-block">
							      <span><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/05/Icon_2-07.png" alt=""></span>
							      <p class="card-text">Besides predefined locations, we will deliver a car next to your place within the city.</p>
							      
							    </div>
							  </div>
							  <div class="card text-center">
							    <h3 class="card_sredina">Trust & safety</h3>
							    <div class="card-block">
							      <span><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/05/Icon_3-07.png" alt=""></span>
							      <p class="card-text">Add full insurance to your rent, be safe and drive carefree!</p>
							      
							    </div>
							  </div>
							   <div class="card text-center">
							    <h3>Convenience and eco fleet</h3>
							    <div class="card-block">
							      <span><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2017/05/Icon_4-07.png" alt=""></span>
							      <p class="card-text">We offer new and reliable eco fleet for your pleasant journey!</p>
							      
							    </div>
							  </div>
							</div>  -->	

						
				</div>	
				

			</div><!-- #primary -->


 
	<!-- 6. benefits --> 


			<div class="col-md-12 content-area" id="primary">
				
				<h1 id="benefits" class="text-center naslovi"><?php pll_e(' Special benefits ');?></h1>

			</div><!-- #primary -->


	<!-- 7. dvije  --> 
<div class="row">
	<div class="col-md-6 content-area" id="zuto">
				
			<div class="col-md-6 offset-md-3 text-center">
					
				<h2><?php pll_e(' Car sharing ');?></h2>
				<ul class="text-left">
					<li><?php pll_e(' Spin City membership fee for only 8 kn with 20 bonus minutes for driving.
					Car sharing allows you to rent a car via smartphone by minute or hour ');?>
					</li>
					<li><?php pll_e(' Use promo code ');?>  <strong><span style="color:#9249CE;"><?php pll_e(' REGAN7W4  ');?></span></strong><?php pll_e(' for special registraton offer ');?></li>
					<li><?php pll_e(' Fuel, parking, maintenance included ');?></li>
					<li><?php pll_e(' No hidden fees ');?></li>
				</ul>

				<a target="_blank" href="https://www.spincity.hr" class="btn btn-primary text-center" role="button" aria-disabled="true"><?php pll_e(' JOIN ');?></a>

			</div>

		</div>

		<div class="col-md-6 content-area" id="ljubicasto">
				
				<div class="col-md-6 offset-md-3 text-center">
					
				
					<h2><?php pll_e(' Starting a business? ');?></h2>
						<ul class="text-left">

							<li><?php pll_e(' Start up / entreprenuers ');?></li>
							<li><?php pll_e(' Business rentals - mobile and flexible services ');?></li>
							<li><?php pll_e(' Daily, weekly or monthly rentals ');?></li>
						</ul>

					<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><?php pll_e(' GET BUSINESS OFFER ');?></button>

				</div>

				<!-- MODAL -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <!-- <h4 class="modal-title">GET BUSINESS OFFER</h4> --> 
					      </div>
					      <div class="modal-body">
					        <?php the_field("kontakt"); ?>
					      </div>
					   
					    <!--  <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div> --> 

					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
		</div>
	</div>
	<!-- 8. IKONE  --> 

		<div class="fluid-contanier text-center">
			<div class="row">
				<div class="col-md-3 ikone adresa">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<p>Zagrebačka cesta 143 A, Zagreb</p>

				</div>
				<div class="col-md-3 ikone">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p><a href="mailto:zagreb@spincity.hr">rentals@spincity.hr</a></p>

				</div>
				<div class="col-md-3 ikone mobitel">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<p><a href="tel:+3851 4440 051">+3851 4440 051</a> </p>
				</div>
				<div class="col-md-3 ikone">
					<span class="align-middle ikone_prefooter">


					<a href="https://www.facebook.com/spincitycarsharing/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/spincity_carsharing/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!-- <a href="https://twitter.com/spincity_hr?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/company/spin-city"><i class="fa fa-linkedin" aria-hidden="true"></i></a> --></span>
					

				</div>

			</div>
			

		</div>	

		<!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
