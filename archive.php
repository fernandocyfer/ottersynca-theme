<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                <?php 
                if (is_tax('download_category')) {
                    single_term_title('Categoria: ');
                } elseif (is_tax('download_tag')) {
                    single_term_title('Tag: ');
                } else {
                    echo 'Todos os Plugins';
                }
                ?>
            </h1>
            
            <?php if (is_tax()) : ?>
                <div class="taxonomy-description" style="color: #666; max-width: 600px; margin: 0 auto;">
                    <?php echo term_description(); ?>
                </div>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <!-- Filtros -->
            <div class="plugins-filters" style="margin-bottom: 2rem; text-align: center;">
                <select class="plugin-filter" style="padding: 0.5rem 1rem; border: 1px solid #ddd; border-radius: 5px; margin-right: 1rem;">
                    <option value="all">Todas as Categorias</option>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'download_category',
                        'hide_empty' => true,
                    ));
                    
                    foreach ($categories as $category) {
                        echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                    }
                    ?>
                </select>
                
                <select class="price-filter" style="padding: 0.5rem 1rem; border: 1px solid #ddd; border-radius: 5px;">
                    <option value="all">Todos os Preços</option>
                    <option value="free">Grátis</option>
                    <option value="paid">Pagos</option>
                </select>
            </div>

            <!-- Grid de plugins -->
            <div class="plugins-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="plugin-card" data-category="<?php 
                        $categories = get_the_terms(get_the_ID(), 'download_category');
                        if ($categories && !is_wp_error($categories)) {
                            echo esc_attr($categories[0]->slug);
                        }
                    ?>" data-price="<?php 
                        if (function_exists('edd_get_download_price')) {
                            $price = edd_get_download_price(get_the_ID());
                            echo $price == '0.00' ? 'free' : 'paid';
                        } else {
                            echo 'paid';
                        }
                    ?>">
                        <div class="plugin-icon">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: auto; border-radius: 12px;')); ?>
                            <?php else : ?>
                                <i class="fas fa-puzzle-piece"></i>
                            <?php endif; ?>
                        </div>
                        
                        <h3 class="plugin-title">
                            <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        
                        <div class="plugin-description">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <div class="plugin-meta" style="margin-bottom: 1.5rem; font-size: 0.9rem; color: #666;">
                            <span style="margin-right: 1rem;">
                                <i class="fas fa-calendar"></i> 
                                <?php echo get_the_date(); ?>
                            </span>
                            <span>
                                <i class="fas fa-download"></i> 
                                <?php echo get_post_meta(get_the_ID(), 'download_count', true) ?: '0'; ?> downloads
                            </span>
                        </div>
                        
                        <?php if (function_exists('edd_get_download_price')) : ?>
                            <div class="plugin-price">
                                <?php 
                                $price = edd_get_download_price(get_the_ID());
                                if ($price == '0.00') {
                                    echo '<span style="color: #4CAF50;">Grátis</span>';
                                } else {
                                    echo 'R$ ' . $price;
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                        
                        <a href="<?php the_permalink(); ?>" class="buy-button">
                            Ver Detalhes
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

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