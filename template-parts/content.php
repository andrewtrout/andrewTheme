<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package andrewTheme
 */

?>




	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="col-xs-6 grid-item nopadding">
		

		<div class="entry-content">
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink(); ?>">
						<div class="imagecontainer">
							<div class="overlay">
								<div class="textbox topleft">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</div>
								<div class="textbox bottomright">
								<?php the_excerpt(); ?>
							</div>
							</div>
							<?php the_post_thumbnail(); ?>
						</div>
						</a>

					</div>
		</div><!-- .entry-content -->

		<!--

		<footer class="entry-footer">
			<?php andrewtheme_entry_footer(); ?>
		</footer> 

		.entry-footer -->
		<div>

	</article><!-- #post-## -->




