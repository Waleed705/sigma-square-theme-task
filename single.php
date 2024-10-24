

<div class="page-bg">
<div class="page-img">
    <div class="page-header">
    <?php get_header();?>
    </div>
    <div class="page-title">
    <h1><?php the_title(); ?></h1>
    </div>
</div>
</div>
    <div class="post-show">
      <div class="single-post-image">
                <?php the_post_thumbnail(); ?>
                </div>
                <?php echo get_the_date();?>
                <?php echo the_content(); ?>
                <?php comments_template(); ?>
        </div>
        </div>
        <?php get_footer(); ?>