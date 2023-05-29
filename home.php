<?php
/**
 * Template Name: Home
 * Description: Custom template for the homepage.
 */

get_header();

if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
		<article class="texto-post-blog">
			<h2 class="titulo-post-blog"><?php the_title(); ?></h2>
			<?php
				if (has_post_thumbnail()) {
					?>
					<a href="<?php the_permalink(); ?>" class="image-link"><?php
					the_post_thumbnail('medium');
					?>
				</a>
			<?php } ?>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>" class="read-more-link">Leer más</a>
		</article>
		<?php
	}
} else {
	// Display a message if no posts are found.
	?>
	<article>
		<h2>No se encontraron posts.</h2>
	</article>
	<?php
}