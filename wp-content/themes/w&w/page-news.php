<?php
/*Template Name: News Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <div class="news-container">
            <?php
            $news=array(
                'post_type' => 'news',
                'posts_per_page' => 3000
            );
            // The Query
            query_posts($news);
            // The Loop
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    echo"<ul class='news'><li class='news-photo'>";
                    the_post_thumbnail();
                    echo"</li><li class='news-content'><h2>";
                    the_title();
                    echo"</h2><p>";
                    the_content();
                    echo"</p></li></ul>";
                }// end while
            }// end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
            ?>
        </div>
    </section>
<?php get_footer(); ?>