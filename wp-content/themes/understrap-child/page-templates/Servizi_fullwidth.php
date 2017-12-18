<?php
/**
 * Template Name: Servizi_fullwidth
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
		

			<div class="row">
				
				
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

					<?php endwhile; // end of the loop. ?>
				</div>

				
			</div>
			

		


		</div>
		
		<div class="container">
			
			<!--   3 GUMBA   -->
		
			<div class="row py-5" id="three_buttons">
					<div class="col col-md-4"><button type="button" class="btn btn-primary">Richiamami</button></div>
					<div class="col col-md-4"><button type="button" class="btn btn-primary">Prenota un appuntamento</button></div>
					<div class="col col-md-4"><button type="button" class="btn btn-primary">Preventivo</button></div>
				</div>	
		
		</div>
			<div class="fluid-contanier">
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									      <img class="d-block w-100" src="http://via.placeholder.com/1920x300" alt="First slide">
									    </div>
									    <div class="carousel-item">
									      <img class="d-block w-100" src="http://via.placeholder.com/1920x300" alt="Second slide">
									    </div>
									   <!-- <div class="carousel-item">
									      <img class="d-block w-100" src="http://via.placeholder.com/1920x300" alt="Third slide">
									    </div> --> 
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

				

		
		
		

	
	


</div>

	



<?php get_footer(); ?>
