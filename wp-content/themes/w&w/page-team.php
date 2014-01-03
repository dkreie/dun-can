<?php
/*Template Name: Teams Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <?php
/*Template Name: Projects Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <ul id="og-grid" class="og-grid">
        <?php
        $team=array(
            'post_type' => 'team',
            'posts_per_page' => 3000
        );
        // The Query
        query_posts($team);
        // The Loop
        if (have_posts()) {
            while (have_posts()){
                the_post();
                echo"<li><a href='";
                the_field('custom_url');
                echo"' data-largesrc='";
                bloginfo('url');
                echo"/wp-content/uploads/";
                the_field('project_image_location');
                echo"' data-title='";
                the_title();
                echo"' data-description='";
                the_excerpt();
                echo"'>";
                the_post_thumbnail();
                echo"</a></li>";
            }// end while
        }// end if
        wp_reset_query();
        // Reset Query
        wp_reset_postdata();
        ?>
        </ul>
    </section>
<?php get_footer(); ?>