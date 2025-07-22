<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                Resultados da Busca
            </h1>
            
            <?php if (get_search_query()) : ?>
                <p style="color: #666; font-size: 1.1rem;">
                    Resultados para: <strong>"<?php echo get_search_query(); ?>"</strong>
                </p>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="search-results" style="max-width: 800px; margin: 0 auto;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="search-result" style="background: white; border-radius: 10px; padding: 2rem; margin-bottom: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h2 style="margin-bottom: 1rem;">
                            <a href="<?php the_permalink(); ?>" style="color: #667eea; text-decoration: none; font-size: 1.3rem;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="search-excerpt" style="color: #666; margin-bottom: 1rem; line-height: 1.6;">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <div class="search-meta" style="font-size: 0.9rem; color: #999;">
                            <span style="margin-right: 1rem;">
                                <i class="fas fa-calendar"></i> 
                                <?php echo get_the_date(); ?>
                            </span>
                            <span style="margin-right: 1rem;">
                                <i class="fas fa-folder"></i> 
                                <?php 
                                $categories = get_the_category();
                                if ($categories) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </span>
                            <span>
                                <i class="fas fa-tag"></i> 
                                <?php 
                                $tags = get_the_tags();
                                if ($tags) {
                                    $tag_names = array();
                                    foreach ($tags as $tag) {
                                        $tag_names[] = $tag->name;
                                    }
                                    echo implode(', ', $tag_names);
                                }
                                ?>
                            </span>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more" style="display: inline-block; margin-top: 1rem; color: #667eea; text-decoration: none; font-weight: 600;">
                            Ler mais <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
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
            <div class="no-results" style="text-align: center; padding: 4rem 0;">
                <div style="font-size: 4rem; color: #ddd; margin-bottom: 1rem;">
                    <i class="fas fa-search"></i>
                </div>
                <h2 style="margin-bottom: 1rem; color: #333;">Nenhum resultado encontrado</h2>
                <p style="color: #666; margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Não encontramos nenhum conteúdo que corresponda aos seus termos de busca. 
                    Tente usar palavras-chave diferentes ou navegue pelas categorias.
                </p>
                
                <!-- Formulário de busca -->
                <div class="search-form" style="max-width: 400px; margin: 0 auto 2rem;">
                    <?php get_search_form(); ?>
                </div>
                
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">
                    Voltar ao Início
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?> 