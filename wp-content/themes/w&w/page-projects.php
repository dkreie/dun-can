<?php
/*Template Name: Projects Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <div class="projects-container">
        <?php
        // The Query
            $media_sponsors=array(
                'post_type' => 'sponsors',
                'sponsor_type' => 'media',
                'posts_per_page' => 30
            );
            if (have_posts()) {
                the_post();
                wp_reset_query();
                // Reset Query
                wp_reset_postdata();
                query_posts($media_sponsors);
                // The Loop
                while (have_posts()){
                    the_post();
                        echo"<div class='sponsor-list'><a href='";the_field('custom_url');echo"' target='_blank'><div class='sponsor'>";
                        the_content();
                        echo"</div><p>";
                        the_excerpt();
                        echo"</p></a></div>";
                }// end while
                wp_reset_query();
                // Reset Query
                wp_reset_postdata();
                echo"</div>";
            } // end if
        ?>
        </div>
    </section>
<?php get_footer(); ?>