<?php
/*
Template Name: お問い合わせ
*/
?><?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $content = get_the_content(); ?>
<?php echo do_shortcode($content); ?>
<?php endwhile; endif; ?>
<script>
    jQuery(function() {
    var isConfirm = $('input[name="submitConfirm"]').length ? false : true;
        if (isConfirm) {
            $('.confirm').show();
        } else {
            $('.input').show();
        }
    });
</script>
<style>
input[type=checkbox] {
        display: inline-block;
}
</style> 
<?php get_footer(); ?>

