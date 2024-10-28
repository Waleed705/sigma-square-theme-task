<?php
/**
 * Template Name: Author 
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
            $author_id = $_GET['author_id'];
            $author = get_userdata($author_id);
            if ($author) {
                echo '<h1>Author: '.esc_html($author->display_name) . '</h1>';
            } else {
                echo '<h1>Author not found.</h1>';
            }
            ?>
        </div>
    </div>
</div>
<div class="blog-posts-side">
    <?php
        $query_args = [
            'author' => $author_id,
            'posts_per_page' => -1
        ];
        $author_query = new WP_Query($query_args);
        if ($author_query->have_posts()) {
            while ($author_query->have_posts()) {
                $author_query->the_post();
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
            echo "<p>No posts found for this author.</p>";
        }
        wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
