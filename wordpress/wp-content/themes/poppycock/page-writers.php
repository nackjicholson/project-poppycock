<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				
				<div id="inner-content" class="wrap clearfix">

					<p>These are our degenerates...err...contributors</p>

		    	<ul class="writers-list">
		    		<?php wp_list_authors( array('optioncount' => true) ); ?>
		    	</ul>
			
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
