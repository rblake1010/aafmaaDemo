<?php
/**
 * The first/left sidebar widgetized area.
 *
 * If no active widgets in sidebar, default login widget will appear.
 *
 * @since 1.0.0
 */
?>
	<div id="secondary" <?php bavotasan_sidebar_class(); ?> role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Default Widget', 'national-basic' ); ?></h3>
				<p><?php printf( __( 'This is just a default widget. It\'ll disappear as soon as you add your own widgets on the %sWidgets admin page%s.', 'national-basic' ), '<a href="' . admin_url( 'widgets.php' ) . '">', '</a>' ); ?></p>

				<p><?php _e( 'Below is an example of an unordered list.', 'national-basic' ); ?></p>
				<ul>
					<li><?php _e( 'List item one', 'national-basic' ); ?></li>
					<li><?php _e( 'List item two', 'national-basic' ); ?></li>
					<li><?php _e( 'List item three', 'national-basic' ); ?></li>
					<li><?php _e( 'List item four', 'national-basic' ); ?></li>
				</ul>
			</aside>
		<?php endif; ?>
	</div><!-- #secondary.widget-area -->
