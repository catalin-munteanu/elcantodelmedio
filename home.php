<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../wp-content/themes/cantodelmedio/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;600;700&family=Cabin:wght@400;700&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="..\wp-content\themes\cantodelmedio\js\main.js"></script>
    <title>El canto del medio | Blog</title>
</head>

<body>

    <?php require_once 'header.php'; ?> 
    
    <?php
/**
 * Template Name: Home
 * Description: Custom template for the homepage.
 */

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h2 class="titulo-post-blog"><?php the_title(); ?></h2>
        <article class="texto-post-blog"><?php the_post(); ?></article>
        <?php
    }
} else {
    // Display a message if no posts are found.
    echo 'No se han encontrado posts.';
}