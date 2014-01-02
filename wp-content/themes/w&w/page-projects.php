<?php
/*Template Name: Projects Page*/
?>
<?php get_header(); ?>
    <section class="clearfix">
        <ul class="projects-container">
        <?php
        $projects=array(
            'post_type' => 'projects',
            'posts_per_page' => 3000
        );
        // The Query
        query_posts($projects);
        // The Loop
        if (have_posts()) {
            while (have_posts()){
                the_post();
                echo"<li class='project'>";
                the_post_thumbnail();
                echo"</li><div class='project-content'>";
                the_content();
                echo"<h2>";
                the_title();
                echo"</h2><p>";
                the_excerpt();
                echo"</p></div>";
            }// end while
        }// end if
        wp_reset_query();
        // Reset Query
        wp_reset_postdata();
        ?>
        </ul>
    </section>
<?php get_footer(); ?>