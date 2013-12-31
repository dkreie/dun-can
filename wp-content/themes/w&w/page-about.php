<?php
/*Template Name: About Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <div class="contact-left">
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
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    echo"<h1>";
                    the_title();
                    echo"</h1>";
                    // The Query
                    query_posts($license);
                    // The Loop
                    if (have_posts()) {
                        while (have_posts()){
                            the_post();
                            echo"<li>";
                            the_title();
                            echo"</li>";
                            if (have_content()){
                                while (have_content()){
                                    echo"<p>";
                                    the_content();
                                    echo"</p>";
                                }// end whiler
                            }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                    // The Query
                    query_posts($membership);
                    // The Loop
                    if (have_posts()) {
                        while (have_posts()){
                            the_post();
                            echo"<li>";
                            the_title();
                            echo"</li>";
                            if (have_content()){
                                while (have_content()){
                                    echo"<p>";
                                    the_content();
                                    echo"</p>";
                                }// end whiler
                            }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                    // The Query
                    query_posts($certification);
                    // The Loop
                    if (have_posts()) {
                        while (have_posts()){
                            the_post();
                            echo"<li>";
                            the_title();
                            echo"</li>";
                            if (have_content()){
                                while (have_content()){
                                    echo"<p>";
                                    the_content();
                                    echo"</p>";
                                }// end whiler
                            }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                }//end while
            }//end if
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();?>
            </div>
            <div class="contact-right">
                <?php
                    // The Query
                    if (have_posts()) {
                        // The Loop
                        while (have_posts()){
                            the_post();
                            echo"<div>";
                            the_field('');
                            echo"</div>";
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                ?>
            </div>
        </section>
<?php get_footer(); ?>