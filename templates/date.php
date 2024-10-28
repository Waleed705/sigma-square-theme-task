<?php
/**
 * Template Name: date-post
 */
?>
<body>
<div class="page-bg">
    <div class="page-img">
        <div class="page-header">
            <?php get_header(); ?>
            <?php wp_head(); ?>
        </div>
        <div class="page-title">
        <?php
$date = isset($_GET['date']) ? sanitize_text_field($_GET['date']) : '';
if ($date) {
    $formatted_date = date_i18n('F j, Y', strtotime($date));
    echo '<h1>Day: ' . esc_html($formatted_date) . '</h1>';
} else {
    echo '<h1>No Date Provided</h1>';
}
?>
        </div>
    </div>
</div>

<div class="blog-posts-side">
    <?php
        if ($date) {
            $year = date('Y', strtotime($date));
            $month = date('m', strtotime($date));
            $day = date('d', strtotime($date));
            $query_args = [
                'year' => $year,
                'monthnum' => $month,
                'day' => $day,
                'posts_per_page' => -1
            ];
            $date_query = new WP_Query($query_args);
            if ($date_query->have_posts()) {
                while ($date_query->have_posts()) {
                    $date_query->the_post();
    ?>
                <div class="blog-post">
                    <div class="post-image">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
                        <p><a href="<?php the_permalink(); ?>"><?php echo get_the_time(); ?></a></p>
                    </div>
                    <div class="post-heading">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                </div>
    <?php
                }
            } else {
                echo "<p>No posts found for this date.</p>";
            }
            wp_reset_postdata();
        }
    ?>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
