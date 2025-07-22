<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('plugin-single'); ?>>
                <div class="plugin-header">
                    <div class="plugin-icon">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover; border-radius: 25px;')); ?>
                        <?php else : ?>
                            <i class="fas fa-puzzle-piece"></i>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="plugin-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="plugin-meta" style="color: #666; margin-bottom: 2rem;">
                        <span style="margin-right: 2rem;">
                            <i class="fas fa-calendar"></i> 
                            <?php echo get_the_date(); ?>
                        </span>
                        <span style="margin-right: 2rem;">
                            <i class="fas fa-code-branch"></i> 
                            Versão <?php echo get_post_meta(get_the_ID(), 'plugin_version', true) ?: '1.0.0'; ?>
                        </span>
                        <span>
                            <i class="fas fa-download"></i> 
                            <?php echo get_post_meta(get_the_ID(), 'download_count', true) ?: '0'; ?> downloads
                        </span>
                    </div>
                </div>

                <div class="plugin-content">
                    <div class="plugin-main-content">
                        <div class="plugin-description">
                            <h2>Descrição</h2>
                            <div class="description-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                        <?php if (get_post_meta(get_the_ID(), 'plugin_features', true)) : ?>
                            <div class="plugin-features-section">
                                <h3>Funcionalidades</h3>
                                <ul class="plugin-features">
                                    <?php 
                                    $features = get_post_meta(get_the_ID(), 'plugin_features', true);
                                    if (is_array($features)) {
                                        foreach ($features as $feature) {
                                            echo '<li>';
                                            echo '<span class="feature-icon">✓</span>';
                                            echo esc_html($feature);
                                            echo '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="plugin-sidebar">
                        <div class="plugin-card">
                            <div class="plugin-price" style="text-align: center; margin-bottom: 2rem;">
                                <?php 
                                $price = cyfer_get_download_price();
                                if ($price == '0.00') {
                                    echo '<span style="font-size: 2.5rem; font-weight: 700; color: #4CAF50;">Grátis</span>';
                                } else {
                                    echo '<span style="font-size: 2.5rem; font-weight: 700; color: #667eea;">R$ ' . $price . '</span>';
                                }
                                ?>
                            </div>
                            
                            <div class="purchase-form" style="margin-bottom: 2rem;">
                                <?php echo cyfer_get_purchase_link(); ?>
                            </div>
                            
                            <div class="plugin-info">
                                <div style="margin-bottom: 1rem;">
                                    <strong><i class="fas fa-shield-alt" style="color: #667eea; margin-right: 0.5rem;"></i>Compatibilidade:</strong> 
                                    <br>WordPress <?php echo get_post_meta(get_the_ID(), 'wp_version', true) ?: '5.0+'; ?>
                                </div>
                                <div style="margin-bottom: 1rem;">
                                    <strong><i class="fas fa-sync-alt" style="color: #667eea; margin-right: 0.5rem;"></i>Última atualização:</strong> 
                                    <br><?php echo get_the_modified_date(); ?>
                                </div>
                                <div style="margin-bottom: 1rem;">
                                    <strong><i class="fas fa-download" style="color: #667eea; margin-right: 0.5rem;"></i>Downloads:</strong> 
                                    <br><?php echo get_post_meta(get_the_ID(), 'download_count', true) ?: '0'; ?>
                                </div>
                                <div>
                                    <strong><i class="fas fa-star" style="color: #667eea; margin-right: 0.5rem;"></i>Suporte:</strong> 
                                    <br>Premium incluído
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php if (get_post_meta(get_the_ID(), 'plugin_screenshots', true)) : ?>
                    <div class="plugin-screenshots">
                        <h2>Screenshots</h2>
                        <div class="screenshots-grid">
                            <?php 
                            $screenshots = get_post_meta(get_the_ID(), 'plugin_screenshots', true);
                            if (is_array($screenshots)) {
                                foreach ($screenshots as $screenshot) {
                                    echo '<div class="screenshot-item">';
                                    echo '<img src="' . esc_url($screenshot) . '" alt="Screenshot do plugin">';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Seção de plugins relacionados -->
                <div class="related-plugins">
                    <h2>Outros Plugins</h2>
                    <div class="plugins-grid">
                        <?php
                        $related_query = new WP_Query(array(
                            'post_type' => 'download',
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'post__not_in' => array(get_the_ID()),
                            'orderby' => 'rand'
                        ));
                        
                        if ($related_query->have_posts()) : while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <article class="plugin-card">
                                <div class="plugin-icon">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <i class="fas fa-puzzle-piece"></i>
                                    <?php endif; ?>
                                </div>
                                
                                <h3 class="plugin-title"><?php the_title(); ?></h3>
                                
                                <div class="plugin-description">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <div class="plugin-price">
                                    <?php 
                                    $price = cyfer_get_download_price();
                                    if ($price == '0.00') {
                                        echo 'Grátis';
                                    } else {
                                        echo 'R$ ' . $price;
                                    }
                                    ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="buy-button">
                                    Ver Detalhes
                                </a>
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <a>Novas soluções em desenvolvimento, aguarde!</a>
                        <?php    
                        endif; ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?> 