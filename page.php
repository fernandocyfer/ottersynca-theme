<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
                <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
                    <h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="page-content" style="max-width: 800px; margin: 0 auto; line-height: 1.8; color: #666;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?> 