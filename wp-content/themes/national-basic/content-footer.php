<?php
/**
 * The template for displaying article footers
 *
 * @since 1.0.0
 */
 ?>
	<footer class="clearfix">
	    <?php
	    if ( is_single() ) wp_link_pages( array( 'before' => '<p id="pages">' . __( 'Pages:', 'national-basic' ) ) );
		if ( is_single() ) the_tags( '<p class="tags"><i class="fa fa-tags"></i> <span>' . __( 'Tags:', 'national-basic' ) . '</span>', ' ', '</p>' );
	    edit_post_link( __( 'Edit', 'national-basic' ), '<p class="edit-link">', '</p>' );
	    ?>
	</footer><!-- .entry -->