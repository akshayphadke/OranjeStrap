<?php
/**
 * @package OranjeStrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta-custom">
		<span class="entry-meta">
			<?php OranjeStrap_posted_on(); ?>
		</span><!-- .entry-meta -->
		<span class="tags">
	
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'OranjeStrap' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'OranjeStrap' ) );

			if ( ! OranjeStrap_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %2$s.', 'OranjeStrap' );
				} else {
					$meta_text = __( '', 'OranjeStrap' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %2$s', 'OranjeStrap' );
				} else {
					$meta_text = __( '', 'OranjeStrap' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>
	</span>
	</div>
	</header><!-- .entry-header -->
<footer class="entry-meta">
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'OranjeStrap' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'OranjeStrap' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
