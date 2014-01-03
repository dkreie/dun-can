<?php
/*Template Name: Home Page*/
?>
<?php get_header(); ?>
    <div class="home clearfix">
    <?php
    // The Query
        if (have_posts()) {
            the_post();
            echo"<div class='home-carousel clearfix'>";
            the_content();
            echo"</div>";
            wp_reset_query();
            // Reset Query
            wp_reset_postdata();
        } // end if
    ?>
    </div>
<?php get_footer(); ?>