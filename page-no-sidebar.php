<?php
/**
 * Template Name: Page - No Sidebar
 *
 * Requires a tweak to the header.php of the original theme, since it creates
 * a col-md-7 there rather than in the page template.
 *
 * @package hipwords
 */

get_header('no-sidebar'); ?>

<!-- putting this here instead of header -->
<div class="col-md-12">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'page'); ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>



<?php get_footer(); ?>
