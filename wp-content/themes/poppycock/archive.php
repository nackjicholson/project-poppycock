<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
				    <div id="main" class="twelvecol first clearfix" role="main">
				
					    <?php if (is_category()) { ?>
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
						    <!--<h1 class="archive-title h3">
							    <span><?php _e("", "bonestheme"); ?></span> <?php single_cat_title(); ?>
					    	</h1>-->

					    
					    <?php } elseif (is_tag()) { ?> 
						    <h1 class="archive-title h3">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>

					    <?php } elseif (is_author()) { ?>
					    	<?php 
								$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
								?>
						    <h1 class="archive-title h3">
						    	<?php the_author_meta('display_name', $curauth->ID ); ?>
						    </h1>
					    
					    <?php } elseif (is_day()) { ?>
						    <h1 class="archive-title h3">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1 class="archive-title h3">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1 class="archive-title h3">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('twelvecol first clearfix archive-post'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2 sixcol first"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

						    <section class="post-content fourcol clearfix">
						
							    <?php //the_post_thumbnail( 'bones-thumb-300' ); ?>
						
							    <?php the_excerpt(); ?>
					
						    </section> <!-- end article section -->
							
							    <div class="meta twocol last">
							    	<p>
								    	<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
							    	</p>
							    	<p>
							    		<?php the_author_posts_link(); ?>
							    	</p>
							    </div>
						
						    </header> <!-- end article header -->
						
						    <footer class="article-footer">
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
						
						        <?php bones_page_navi(); // use the page navi function ?>

					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="post-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	    			<?php get_sidebar(); // sidebar 1 ?>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>
