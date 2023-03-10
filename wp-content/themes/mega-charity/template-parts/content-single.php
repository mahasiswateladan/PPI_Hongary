<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Mega Charity
 * @since Mega Charity 1.0.0
 */
$options = mega_charity_get_theme_options();
$class = has_post_thumbnail() ? '' : 'no-post-thumbnail';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear ' . $class ); ?>>
	<div class="entry-meta">
		<?php if ( ! $options['single_post_hide_author'] ) :
			echo mega_charity_author_meta();
		endif; 

		if ( ! $options['single_post_hide_date'] ) :
			mega_charity_posted_on(); 
		endif; ?>
    </div><!-- .entry-meta -->

	<div class="entry-container">
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mega-charity' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mega-charity' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-container -->

	<div class="entry-meta">
		<?php mega_charity_entry_footer(); ?>   
	</div><!-- .entry-meta -->
</article>
