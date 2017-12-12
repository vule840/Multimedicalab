<?php
/**
 * Template Name: Servizi
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

			BOXES DODACI, NA GLAVNE STRANICE
			
				
	 **********************  -->
	 <?php if ( is_page('servizi') ) : ?>
	<div class="fluid-contanier" id="ikonice_hover">

		<div class="container">
			<div class="row karte">
					<div class="col-sm-6 col-xl-3">
							<div class="card text-center">
								<i class="fa fa-user-md" aria-hidden="true"></i>
								<h3>Check Up</h3>		
							</div>
						</div>
					 <div class="col-sm-6 col-xl-3">
							<div class="card text-center">
								<i class="fa fa-medkit" aria-hidden="true"></i>
								<!-- <img src="wp-content/uploads/2017/11/2.svg" alt=""> --> 
								<h3>Pazienti</h3>		
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card text-center">
								<i class="fa fa-stethoscope" aria-hidden="true"></i>
								 <h3 class="card_sredina">Aziende</h3>  
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="card text-center">
								<i class="fa fa-heartbeat" aria-hidden="true"></i>
								<h3 class="card_sredina">Convenzioni</h3>
							</div>		   
						</div>
						
								
				</div>
			
			</div>


		
		</div>

	<?php endif; ?>

	<!-- ******************

			2 COLUMNS TX, BG IMAGE
			
				
	 **********************  -->

	<div class="container-fluid" id="two_columns">
		

		<div class="container">
		

			<div class="row">
				
				<?php
					if ( is_page( 'check-up' ) || '72' == $post->post_parent ) {    
					    // the page is "About", or the parent of the page is "About"
 
					    	dynamic_sidebar( 'check-up' );		
					   
					} elseif ( is_page( 'pazienti' ) || '48' == $post->post_parent ) {
						  
					     dynamic_sidebar( 'pazienti' ); 
					} elseif ( is_page( 'aziende' ) || '36' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'aziende' ); 
					   
					} elseif ( is_page( 'convenzioni' ) || '213' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'convenzioni' ); 
					   
					} elseif ( is_page( 'collaborazioni' ) || '38' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'collaborazioni' ); 
					   
					} elseif ( is_page( 'multimedica-lab' ) || '299' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'multimedica-lab' ); 
					   
					} elseif ( is_page( 'staff' ) || '309' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'staff' ); 
					   
					}
					elseif ( is_page( 'dove-siamo' ) || '330' == $post->post_parent ) {
						 
						 dynamic_sidebar( 'dove-siamo' ); 
					   
					} 


					 else { 
					    $bannerimg = 'home.jpg'; // just in case we are at an unclassified page, perhaps the home page
					}   
					?>
					
				
				<div class="col-md-8">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

					<?php endwhile; // end of the loop. ?>
				</div>

				
			</div>
			

		<!-- <div class="row">
				

			<div class="col-md-4 content-area" id="medici">
							
							
				<?php the_field('col1'); ?>

			</div>
			<div class="col-md-4 content-area" id="medici">

				<?php the_field('col2'); ?>

			</div>

		</div> -->
		


		</div>
		

	

	</div>

		

	


</div>

	



<?php get_footer(); ?>
