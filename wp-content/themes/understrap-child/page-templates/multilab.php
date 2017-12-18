<?php
/**
 * Template Name: MultiLab
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */
 
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?> 

<div class="wrapper" id="cover"> 
    
	<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/1920x400" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> 
</div>  -->	
   
	<div class="<?php echo esc_html( $container ); ?>" id="content">

	<!-- <div class="row">
			<div class="col-md-9 ml-auto py-4 text-right"><strong>MULTIMEDICA LAB</strong> Srl Viale Gina Roma, 1/a | 31028 Vazzola località Tezze di Piave (TV) | Tel. 0438/28736 | P. Iva: 04458060268 </div>  <div class="col-md-1 py-4 "><p class="search text-right"> Search</p></div>

			
			 
		</div> -->	
				<?php if ( is_front_page() ) : ?>
				<?php get_template_part( 'global-templates/hero', 'none' ); ?>
			<?php endif; ?>
	


	</div><!-- Container end -->

</div><!-- Wrapper end -->

<div class="wrapper"> 

	<!-- ******************

			5 SLIKA

	 **********************  -->

	 <!-- https://codepen.io/RyArush/pen/mPQGOG -->
	 <!-- https://miketricking.github.io/bootstrap-image-hover/ -->

	<div class="row no-gutters" id="slike_hover">

			<!-- 1 -->	
				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Pazienti.jpg" alt="Card image cap">
				        <div class="overlay">
				           <a href="mulimedicalab/chi-siamo/pazienti/"><h2>Pazienti</h2></a> 
				           <a class="info" href="mulimedicalab/chi-siamo/pazienti/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi
				           </a>
				        </div>
				    </div>
				</div>
			<!-- 2 -->	
				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Aziende.jpg" alt="Card image cap">
				        <div class="overlay">
				           <a href="mulimedicalab/chi-siamo/aziende/"><h2>Aziende</h2></a>
				           <a class="info" href="mulimedicalab/chi-siamo/aziende/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>
				
				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Collaborazioni.jpg" alt="Card image cap">
				        <div class="overlay">
				        	<a href="mulimedicalab/chi-siamo/collaborazioni/"><h2>Collaborazioni</h2></a>
				          
				           <a class="info" href="mulimedicalab/chi-siamo/collaborazioni/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>

				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/PrenatalePMA.jpg" alt="Card image cap">
				        <div class="overlay">
				        	<a href="mulimedicalab/servizi/convenzioni/"><h2>Convenzioni</h2></a>
				           
				           <a class="info" href="mulimedicalab/servizi/convenzioni/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>

				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Promozioni.jpg" alt="Card image cap">
				        <div class="overlay">
				           <a href="mulimedicalab/chi-siamo/promozioni/"><h2>Promozioni</h2></a>
				          
				           <a class="info" href="mulimedicalab/chi-siamo/promozioni/">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>

		</div><!-- .row end -->	

		
		<!-- ******************

			2 COLUMNS TX, BG IMAGE

	 **********************  -->
	

	<div class="container-fluid" id="two_columns">
		
		<div class="container">
			
			<div class="row">

				<div class="col-md-6 content-area" id="primary">

					
					<p>Multimedica Lab, Laboratorio Privato di Analisi Cliniche e Poliambulatorio, è stato fondato nel 2011 su iniziativa della dott.ssa Angela Iudici, titolare della Farmacia di Tezze di Piave.</p>
					<p>Attualmente Multimedica Lab è una struttura indipendente che prosegue l'idea originaria: realizzare un progetto di sanità privata basata sull'attenzione alle necessità della popolazione locale e sullo sviluppo di collaborazioni con centri e laboratori specializzati.</p>

				</div>
				<div class="col-md-6 content-area" id="primary">

					<p>Il nostro obiettivo è anticipare le esigenze sanitarie crescenti dei pazienti offrendo servizi di base e percorsi di alta specialità. </p>

					<!-- <p>L’Organizzazione garantisce la Qualita’ di tutti i servizi erogati, avvalendosi di personale e collaboratori molto qualiﬁcati.</p> -->

				</div> 

		</div><!-- .row end -->	
		

			<!--   3 GUMBA   -->
		
		<div class="row py-4" id="three_buttons">
				<div class="col col-md-4"><button type="button" class="btn btn-primary">Richiamami</button></div>
				<div class="col col-md-4"><button type="button" class="btn btn-primary">Prenota un appuntamento</button></div>
				<div class="col col-md-4"><button type="button" class="btn btn-primary">Preventivo</button></div>
			</div>	


		
	</div>
		

	</div>

<!-- ******************

			IKONICE NA HOVER

	 **********************  -->

	<div class="fluid-contanier" id="ikonice_hover">

	<div class="container">
		<div class="row karte">
				<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<i class="fa fa-user-md" aria-hidden="true"></i>
							<h3>Staff</h3>		
						</div>
					</div>
				 <div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<i class="fa fa-medkit" aria-hidden="true"></i>
							<!-- <img src="wp-content/uploads/2017/11/2.svg" alt=""> --> 
							<h3>Check-up</h3>		
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<i class="fa fa-stethoscope" aria-hidden="true"></i>
							 <h3 class="card_sredina">Dove Siamo</h3>  
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<i class="fa fa-heartbeat" aria-hidden="true"></i>
							<h3 class="card_sredina">Esami Frequenti</h3>
						</div>		   
					</div>
					
							
			</div>
			<div class="row karte">
				<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<img src="wp-content/uploads/2017/11/3.svg" alt="">
							<h3>Esami per Procreazione...</h3>
								    
						</div>
					</div>
				 <div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<img src="wp-content/uploads/2017/11/6.svg" alt="">
							<h3>Harmony Test e PrenatalSafe</h3>

						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<img src="wp-content/uploads/2017/11/4.svg" alt="">
							 <h3 class="card_sredina">IIstruzioni per le analisi</h3>  
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<img src="wp-content/uploads/2017/11/5.svg" alt="">
							<h3 class="card_sredina">Visite <br> specialistiche</h3>
						</div>		   
					</div>
					
							
				</div>
	</div>
<!-- 	<div class="container text-center py-5">
			<div class="row">
				<div class="col-md-2 kvadratici "><span>Agopuntura</span> </div>
				<div class="col-md-2 kvadratici ">Allergologia</div>
				<div class="col-md-2 kvadratici ">Cardiologia</div>
				<div class="col-md-2 kvadratici ">Chirurgia<br> Generale</div>				
			</div>
			<div class="row">
				<div class="col-md-2 kvadratici ">Dermatologia</div>
				<div class="col-md-2 kvadratici ">Diabetologia</div>
				<div class="col-md-2 kvadratici ">Endocrinologia</div>
				<div class="col-md-2 kvadratici ">Endocrinologia</div>			
			</div>

		</div> -->
	
	</div>

	<!-- ******************

			HOME SLIDER_REKLAME

	 **********************  -->



						<div class="fluid-contanier">
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									      <img class="d-block w-100" src="http://localhost/mulimedicalab/wp-content/uploads/2017/12/ad1.jpg" alt="First slide">
									    </div>
									    <div class="carousel-item">
									      <img class="d-block w-100" src="http://via.placeholder.com/1920x300" alt="Second slide">
									    </div>
									     <div class="carousel-item">
									      <img class="d-block w-100" src="http://via.placeholder.com/1920x300" alt="Third slide">
									    </div>
									  </div>
									  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									    <span class="carousel-control-next-icon" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>

									
								</div>


</div>

	



<?php get_footer(); ?>
