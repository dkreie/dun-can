<?php
/*Template Name: Contact Page*/
?>
<?php get_header(); ?>
        <section class="clearfix">
            <div class="contact-left">
                <?php
                    // The Query
                    $licenses=array(
                        'post_type' => 'licenses',
                        'posts_per_page' => 30
                    );
                    if (have_posts()) {
                    echo"<h1>";
                    the_title();
                    echo"</h1>"
                        query_posts($licenses);
                        // The Loop
                        while (have_posts()){
                            the_post();
                                echo"<li>";
                                the_title();
                                echo"</li>";
                                if (have_content()){
                                        echo"<p>";
                                        the_content();
                                        echo"</p>"
                                }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                     // The Query
                    $memberships=array(
                        'post_type' => 'memberships',
                        'posts_per_page' => 30
                    );
                    if (have_posts()) {
                        query_posts($memberships);
                        // The Loop
                        while (have_posts()){
                            the_post();
                                echo"<li>";
                                the_title();
                                echo"</li>";
                                if (have_content()){
                                        echo"<p>";
                                        the_content();
                                        echo"</p>"
                                }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                     // The Query
                    $certifications=array(
                        'post_type' => 'certifications',
                        'posts_per_page' => 30
                    );
                    if (have_posts()) {
                        query_posts($certifications);
                        // The Loop
                        while (have_posts()){
                            the_post();
                                echo"<li>";
                                the_title();
                                echo"</li>";
                                if (have_content()){
                                        echo"<p>";
                                        the_content();
                                        echo"</p>"
                                }// end if
                        }// end while
                    }// end if
                    wp_reset_query();
                    // Reset Query
                    wp_reset_postdata();
                ?>
            </div>
            <div class="contact-right">
                <?php
                        // The Query
                        if (have_posts()) {
                            // The Loop
                            while (have_posts()){
                                the_post();
                                    echo"<div>";
                                    the_content();
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