<?php

/**
 * Template Name: Single
 * Description: Custom template for the single post type.
 */

get_header();

?>
<h2 class="titulo-post-blog"><?php the_title(); ?></h2>
<article class="texto-post-blog"><?php the_content(); ?></article>
<?php

get_footer();