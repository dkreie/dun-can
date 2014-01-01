<?php
/*Template Name: About Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <div class="about-left">
            <?php
            $license=array(
                'post_type' => 'credentials',
                'credential_type' => 'license',
                'posts_per_page' => 30
            );
            $membership=array(
                'post_type' => 'credentials',
                'credential_type' => 'membership',
                'posts_per_page' => 30
            );
            $certification=array(
                'post_type' => 'credentials',
                'credential_type' => 'certification',
                'posts_per_page' => 30
            );
            // The Query
            echo"<h3>Licenses</h3>";
            query_posts($license);
            // The Loop
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    echo"<li>";
                    the_title();
                    echo"</li>";
                }// end while
            }// end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
            // The Query
            echo"<h3>Memberships</h3>";
            query_posts($membership);
            // The Loop
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    echo"<li>";
                    the_title();
                    echo"</li>";
                }// end while
            }// end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
            // The Query
            echo"<h3>Certifications</h3>";
            query_posts($certification);
            // The Loop
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    echo"<li>";
                    the_title();
                    echo"</li>";
                }// end while
            }// end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
            ?>
        </div>
        <div class="about-right">
            <?php
                // The Query
                if (have_posts()) {
                    the_post();
                    echo"<div><p>";
                    the_content();
                    echo"</p></div>";
                }// end if
                wp_reset_query();
                // Reset Query
            ?>
        </div>
    </section>
<?php get_footer(); ?>