?php
/**
 * Template Name: GTC
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-4">
				<ol>
					<a href="#1"><li><strong><?php pll_e('Glossary');?></strong> </li></a><br>
					<a href="#2"><li><strong><?php pll_e('Subject Matter of Agreement');?></strong> </li></a><br>
					<a href="#3"><li><strong><?php pll_e('Terms of Rent');?></strong> </li></a><br>
					<a href="#4"><li><strong><?php pll_e('Reservations and Remote Execution of the Agreement');?> </strong> </li></a><br>
					<a href="#5"><li><strong><?php pll_e('Cancelling the Reservation and Terminating the Agreement');?>  </strong> </li></a><br>
					<a href="#6"><li><strong><?php pll_e('Basic Price of the Rental, Additional Services, Fees and Costs');?> </strong> </li></a><br>
					<a href="#7"><li><strong><?php pll_e('Payment terms');?> </strong> </li></a><br>
					<a href="#8"><li><strong><?php pll_e('Collecting and Returning the Vehicle');?> </strong> </li></a><br>
					<a href="#9"><li><strong><?php pll_e('Use of the Vehicle');?> </strong> </li></a><br>
					<a href="#10"><li><strong><?php pll_e('User’s Obligations');?> </strong> </li></a><br>
					<a href="#11"><li><strong><?php pll_e('Traffic Violations');?>Traffic Violations </strong> </li></a><br>
					<a href="#12"><li><strong><?php pll_e('Damage, Defect, Traffic Accident, Stolen/Lost Vehicle and Lost Documents');?> </strong> </li></a><br>
					<a href="#13"><li><strong><?php pll_e('User’s Liability for Damage');?> </strong> </li></a><br>
					<a href="#14"><li><strong><?php pll_e('Insurance Against Third Party Liability');?> </strong> </li></a><br>
					<a href="#15"><li><strong><?php pll_e('Responsibility for the return of vehicles and protective provisions/clauses');?> </strong> </li></a><br>
					<a href="#16"><li><strong><?php pll_e('GlossLoss of right to protective provisions/clausesary');?> </strong> </li></a><br>
					<a href="#17"><li><strong><?php pll_e('User’s Complaints');?></strong> </li></a><br>
					<a href="#18"><li><strong><?php pll_e('Personal Information and notification');?></strong> </li></a><br>
					<a href="#19"><li><strong><?php pll_e('Loss of Personal Property');?>Loss of Personal Property </strong> </li></a><br>
					
					<a href="#20"><li><strong><?php pll_e('Termination of the Rental Agreement');?> </strong> </li></a><br>
					<a href="#21"><li><strong><?php pll_e('Jurisdiction and Applicable Law');?> </strong> </li></a><br>
					<a href="#22"><li><strong><?php pll_e('Final Provisions');?></strong> </li></a><br>
					<a href="#23"><li><strong><?php pll_e('Miscellaneous');?> </strong> </li></a><br>
				</ol>
				</div>

			<div class="col-md-8 content-area" id="primary">

			

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>



					<?php endwhile; // end of the loop. ?>

				

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
