<?php get_header(); ?>

			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php $postcount = 0; // for checking first post ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					    		<!-- featured image goes here, on the first post in loop -->
							    <?php if (++$postcount == 1) { ?>
						    		<a class='float-link'href="<?php the_permalink() ?>" rel="bookmark">
							    	<?php the_post_thumbnail("full"); ?>	
							    	</a>
							    <? } ?>
						
						    <header class="article-header train-board">
						    	<a class='float-link'href="<?php the_permalink() ?>" rel="bookmark"></a>

								    <h1 class="h2 train-board-title"><?php the_title(); ?></h1>

								    <section class="post-content clearfix train-board-content">
									    <div class="excerpt"><?php the_excerpt(); ?></div>
									    <div class="meta">
									    	<p>
										    	<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> 
										    </p>
									    </div>
								    </section> <!-- end article section -->

						    </header> <!-- end article header -->
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
									<!-- 
									TODO: Erase bones_page_navi stuff on the home page 
					        <?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
						
						        <?php bones_page_navi(); // use the page navi function ?>
						
					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', 'bonestheme')) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', 'bonestheme')) ?></li>
							        </ul>
						        </nav>
					        <?php } ?>		
					      -->
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					        	</header>
					            <section class="post-content">
					        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					        	</section>
					        	<footer class="article-footer">
					        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar("home"); // sidebar 1 ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
