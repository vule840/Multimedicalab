<?php
/**
 * Template Name: Servizi_uno_medici
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
		<!-- <div class="row">
			<div class="col-md-9 ml-auto py-4 text-right"><strong>MULTIMEDICA LAB</strong> Srl Viale Gina Roma, 1/a | 31028 Vazzola località Tezze di Piave (TV) | Tel. 0438/28736 | P. Iva: 04458060268 </div>  <div class="col-md-1 py-4 "><p class="search text-right"> Search</p></div>
 
		</div> -->

		<div class="row text-center">
				<div class="col-md-10 ml-auto py-4 text-right"><?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
					?>
				</div>  		
			</div>
		
		 <div class="header-page text-center">
			<h1 class="p-5"><?php the_title(); ?> </h1>
			<!-- <button type="button" class="btn btn-primary">Prenota un appuntamento</button> --> 	
		</div> 

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<div class="wrapper">

	
		<!-- ******************

			2 COLUMNS TX, BG IMAGE

	 **********************  -->




	<div class="container-fluid" id="two_columns">
		

		<div class="container">
			
			<div class="row pb-5 no-gutters" id="medici2">
				
						<div class="col-md-3">
							<img class="uno" src="http://localhost/mulimedicalab/wp-content/uploads/2017/11/uno_medici.jpg" alt="">

						</div>
						<div class="col-md-9" style="
		    border-bottom: 1px solid #2455A5;"">
							<p>Cognome e nome: <strong>Conte Francesca</strong> </p>
							<p>Data di nascita: <strong>26 / 05 / 1984</strong> </p>
							<p>Laurea: <strong> Medicina e Chirurgia (Padova 22 / 09 / 2009)</strong></p>
							<p>Specializzazione: <strong>Medicina dello sport (Padova 21 / 05 / 2015)</strong> </p>
						</div>
			</div>
			<div class="row">
				

			<div class="col-md-6 content-area" id="medici">
					
								
							
				<?php the_field('col1'); ?>

			</div>
			<div class="col-md-6 content-area" id="primary">

				<?php the_field('col2'); ?>

			</div>



		</div><!-- .row end -->	
		

	</div>
		
			<div class="row py-5">
						<div class="col-md-12 text-center">
							<button type="button" class="btn btn-primary uno-medici">Prenota un appuntamento</button>
						</div>
					</div>

	

	</div>

		

	


</div>

	



<?php get_footer(); ?>
