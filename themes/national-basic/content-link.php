<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @since 1.0.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3 class="post-format"><?php printf( __( '%s Link', 'national-basic' ), '<i class="fa fa-link"></i>' ); ?></h3>

	    <div class="entry-content description clearfix">
		    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'national-basic') ); ?>
	    </div><!-- .entry-content -->

	    <?php get_template_part( 'content', 'footer' ); ?>
	</article>