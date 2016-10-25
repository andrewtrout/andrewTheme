<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewTheme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
	</header><!-- .page-header -->
<p style="padding:50px;">  </p>
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'andrewtheme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p style="padding:50px;"><?php esc_html_e( '</ sorry, but there is nothing here. this is the end >', 'andrewtheme' ); ?></p>
			<?php

		else : ?>

			<p style="padding:50px;"> <?php esc_html_e( '</ sorry, but there is nothing here. this is the end >', 'andrewtheme' ); ?></p>
			<?php

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
