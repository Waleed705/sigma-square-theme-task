
    <div class="page-bg">
        <div class="page-img">
            <div class="page-header">
                <?php get_header();?>
                <?php wp_head();?>
    </div>
    <div class="page-title">
    <h1><?php the_title(); ?></h1>
    </div>
</div>
</div>
<div class="page-posts-side">
    <p><?php echo get_the_content(); ?></p>
</div>
    <?php get_footer();
        wp_footer();
    ?>