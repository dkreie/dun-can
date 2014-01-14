<?php
/*Template Name: Contact Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <div class="contact-left">
            <?php
            // The Query
            if (have_posts()) {
                while (have_posts()){
                    the_post();
                    the_content();
                }//end while
            }//end if
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
                        the_field('contact_map');
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