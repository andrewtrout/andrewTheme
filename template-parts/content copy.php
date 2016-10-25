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

		<div class="col-sm-6">
		

		<div class="entry-content">
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<div class="imagecontainer">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
					</div>
		</div><!-- .entry-content -->

		<!--

		<footer class="entry-footer">
			<?php andrewtheme_entry_footer(); ?>
		</footer> 

		.entry-footer -->
		<div>

	</article><!-- #post-## -->




