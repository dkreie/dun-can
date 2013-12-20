<?php
/*Template Name: News Page*/
?>
<?php get_header(); ?>
        <section class="clearfix">
        <?php
        // The Query
            $artists=array(
                'post_type' => 'artists',
                'posts_per_page' => 30
            );
            if (have_posts()) {
                    the_post();
                        echo"<div class='home-carousel clearfix'>";
                        the_content();
                        echo"</div><h1 class='home-artists-title'>";
                        the_field('carousel_title');
                        echo"</h1><div class='home-artists'>";
                        wp_reset_query();
                        // Reset Query
                        wp_reset_postdata();
                        query_posts($artists);
                        // The Loop
                        while (have_posts()){
                            the_post();
                                echo"<a href='";get_template_directory();echo"/lineup'><div class='thumbnail-container'><div class='image-frame'>";
                                the_post_thumbnail();
                                echo"</div><h4>";
                                the_title();
                                echo"</h4></div></a>";
                        }// end while
                        wp_reset_query();
                        // Reset Query
                        wp_reset_postdata();
                        echo"</div><div class='home-sponsors clearfix'>";
                        the_field('home_page_sponsors');
                        echo"</div><div class='home-column-container'><div class='home-column merch'>";
                        the_field('home_merch');
                        echo"</div><div class='home-social-feed clearfix'><div class='home-column flickr'><img src='";bloginfo('template_directory');echo"/assets/img/flickr-bg-header.png'/>";
                        the_field('home_flickr');
                        echo"<img src='";bloginfo('template_directory');echo"/assets/img/flickr-bg-footer.png'/></div><div class='home-column facebook'>";
                        the_field('home_facebook');
                        echo"</div></div></div>";
            } // end if
        ?>
</section>
<?php get_footer(); ?>