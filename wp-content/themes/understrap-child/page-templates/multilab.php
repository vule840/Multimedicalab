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
    
	
	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">
			<div class="col-md-9 ml-auto py-4 text-right"><strong>MULTIMEDICA LAB</strong> Srl Viale Gina Roma, 1/a | 31028 Vazzola località Tezze di Piave (TV) | Tel. 0438/28736 | P. Iva: 04458060268 </div>  <div class="col-md-1 py-4 "><p class="search text-right"> Search</p></div>

			
			 
		</div>
		<div class="header text-center">
			<h1 class="py-5 naslovna">Poliambulatorio Specialistico<br> e laboratorio Analisi Privato</h1>
			<button type="button" class="btn btn-primary">Prenota un appuntamento</button>	
		</div>

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
				           <h2>Pazienti</h2>
				           <a class="info" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
				           <h2>Aziende</h2>
				           <a class="info" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>
				
				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Collaborazioni.jpg" alt="Card image cap">
				        <div class="overlay">
				           <h2>Collaborazioni</h2>
				           <a class="info" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>

				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/PrenatalePMA.jpg" alt="Card image cap">
				        <div class="overlay">
				           <h2>Prenetale/PMA</h2>
				           <a class="info" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				           quis nostrud exercitation ullamco laboris nisi </a>
				        </div>
				    </div>
				</div>

				<div class="col-md-15 ">
				    <div class="hovereffect">
				        <img class="card-img-top" src="wp-content/uploads/2017/11/Promozioni.jpg" alt="Card image cap">
				        <div class="overlay">
				           <h2>Promozioni</h2>
				           <a class="info" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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

					
					<p>Il Laboratorio Privato di Analisi Cliniche e Poliambulatorio "Multimedica Lab" è stato autorizzato dal Comune di Vazzola il 1° Agosto 2011.</p>
					<p>L'originaria struttura è stata opportunamente ristrutturata con un progetto volto a razionalizzare spazi e percorsi, secondo le logiche della più moderna ingegneria sanitaria riferita ai laboratori di analisi e ai poliambulatori.</p>

				</div>
				<div class="col-md-6 content-area" id="primary">

					<p>La Direzione Sanitaria e' affidata al dott. Alberto Cescato, Medico Chirurgo, mentre la Direzione Tecnica del Labora torio Analisi viene ricoperta dalla dott. Elisabetta Ricci, Biologo Specialista in Biochimica Clinica.</p>
					<p>L’Organizzazione garantisce la Qualita’ di tutti i servizi erogati, avvalendosi di personale e collaboratori molto qualiﬁcati.</p>

				</div>

		</div><!-- .row end -->	
		
	</div>
		
	<!--   3 GUMBA   -->
		
		<div class="row py-4" id="three_buttons">
				<div class="col"><button type="button" class="btn btn-primary">Richiamami</button></div>
				<div class="col"><button type="button" class="btn btn-primary">Prenota un appuntamento</button></div>
				<div class="col"><button type="button" class="btn btn-primary">Preventivo</button></div>
			</div>
			
	

	</div>

<!-- ******************

			IKONICE NA HOVER

	 **********************  -->

	<div class="fluid-contanier" id="ikonice_hover">


		
	<!--<div class="content1 text-center">
		  <div class="red">1</div>
		  <div class="green">2</div>
		  <div class="blue">3</div>
		  <div class="blue">4</div>
		</div>  -->	



	<div class="container">
		<div class="row karte">
				<div class="col-sm-6 col-xl-3">
						<div class="card text-center">
							<i class="fa fa-user-md" aria-hidden="true"></i>
							<h3>Medici</h3>		
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
							<h3 class="card_sredina">Visite specialistiche</h3>
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
	


</div>

	



<?php get_footer(); ?>
