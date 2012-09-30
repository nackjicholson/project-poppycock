			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<!--<nav role="navigation">
    					<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
	        </nav>-->

	        <nav role="navigation" class="footer-nav-pages">
	        	<h1 class="h3"><?php bloginfo('name'); ?></h3>
						<?php bones_main_nav(); ?>
						<p class="attribution">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
	        </nav>

	        <nav role="navigation" class="footer-nav-social">
    				<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
	        </nav>

	        <nav role="navigation" class="footer-nav-cats">
	        	<?php 
						    	// TODO put this as a function
						    	$categories = get_categories( array('orderby' => 'id', 'exclude' => '1') ); 
						    	$output = '<ul class="category-menu">';
						    	foreach($categories as $category) {
						    		$activeClass = "";
						    		if (is_category($category->term_id)) $activeClass = " active";
						    		$output .= '<li><a class="category_title' . $activeClass . '" href="' . get_category_link($category->term_id) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> '; 
						    	}
						    	$output .= '</ul>'; 

						    	echo $output;
						    ?>
	        </nav>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html> <!-- end page. what a ride! -->