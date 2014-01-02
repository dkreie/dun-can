<?php
/*Template Name: News Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <ul class="news-list">
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
                    echo"<li class='news'>";
                    the_post_thumbnail();
                    echo"<div class='news-content'><h2>";
                    the_title();
                    echo"</h2><p>";
                    the_content();
                    echo"</p></div></li>";
                }// end while
            }// end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
            ?>
        </ul>
    </section>
<?php get_footer(); ?>