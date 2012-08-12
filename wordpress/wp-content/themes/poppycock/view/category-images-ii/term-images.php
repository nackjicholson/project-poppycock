<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>

<div class="categories-list fourcol last">
<p class="h3">Post Categories</p>
<ul class="category_images_ii term-images taxonomy-<?php echo esc_attr( $taxonomy ); ?>">
<?php foreach( $terms AS & $term ) { ?>
	<li class="category_image term_image">
	<?php if ( $link_images ) : ?>
		<a href="<?php echo esc_attr( get_term_link( $term[ 'id' ], $taxonomy ) ); ?>">
	<?php endif; ?>
			<img src="<?php echo $term[ 'image' ]; ?>" alt="<?php echo $term[ 'name' ]; ?>" />
	<?php if ( $link_images ) : ?>
		</a>
	<?php endif; ?>
	<?php if ( $show_description ) : ?>
		<a class="category_title" href="<?php echo esc_attr( get_term_link( $term[ 'id' ], $taxonomy ) ); ?>"><?php echo $term['name']; ?></a>
		<p><?php echo term_description( $term[ 'id' ], $taxonomy ); ?></p>
	<?php endif; ?>
	</li>
<?php } // end for loop ?>
</ul>
</div>