<?php

/**
 * Template Name: Single
 * Description: Custom template for the single post type.
 */

get_header();

?>
<section class="single-post-sect">
<h2 class="titulo-post-blog"><?php the_title(); ?></h2>
<p class="post-date"><?php echo get_the_date(); ?></p>
<article class="texto-post-blog"><?php the_content(); ?></article>
</section>
<?php

get_footer();