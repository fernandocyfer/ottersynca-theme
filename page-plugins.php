<?php
/**
 * Template Name: Página de Plugins
 * 
 * @package Cyfer_Plugins
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                <?php echo get_the_title(); ?>
            </h1>
            
            <?php if (get_the_content()) : ?>
                <div class="page-description" style="color: #666; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <!-- Filtros -->
            <?php get_template_part('template-parts/plugins-filters'); ?>

            <!-- Grid de plugins -->
            <?php 
            get_template_part('template-parts/plugins-grid', null, array(
                'posts_per_page' => 12,
                'orderby' => 'date',
                'order' => 'DESC'
            )); 
            ?>

            <!-- Paginação -->
            <div class="pagination" style="text-align: center; margin-top: 3rem;">
                <?php
                echo paginate_links(array(
                    'prev_text' => '<i class="fas fa-chevron-left"></i> Anterior',
                    'next_text' => 'Próximo <i class="fas fa-chevron-right"></i>',
                    'type' => 'list',
                    'class' => 'pagination-list',
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="no-plugins" style="text-align: center; padding: 4rem 0;">
                <div style="font-size: 4rem; color: #ddd; margin-bottom: 1rem;">
                    <i class="fas fa-search"></i>
                </div>
                <h2 style="margin-bottom: 1rem; color: #333;">Nenhum plugin encontrado</h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Não encontramos plugins que correspondam aos seus critérios de busca.
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">
                    Voltar ao Início
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?> 