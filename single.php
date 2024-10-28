

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
                <div class="date">
                    <p>
                        <a href="<?php echo get_permalink(87) . '?author_id=' . get_the_author_meta('ID'); ?>">
                            Theme <?php echo get_the_author(); ?>
                        </a>
                    </p>
                        <span class="span"> - </span>
                        <p>
                            <a href="<?php echo get_permalink(82) . '?date=' . get_the_time('Y-m-d'); ?>">
                                <?php echo get_the_date(); ?>
                            </a>
                        </p>
                        <span class="span"> - </span>
                        <p><a href=""><?php echo get_the_time(); ?></a></p>
                    </div>
                <?php echo the_content(); ?>
                <?php comments_template(); ?>
        </div>
        </div>
        <?php get_footer(); ?>