<?php
/*
Template Name: お問い合わせ
*/
?><?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $content = get_the_content(); ?>
<?php echo do_shortcode($content); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>