<?php
/**
 * Template part para exibir o grid de plugins
 * 
 * @package Cyfer_Plugins
 */

// Evita acesso direto
if (!defined('ABSPATH')) {
    exit;
}

// Parâmetros padrão
$args = wp_parse_args($args, array(
    'posts_per_page' => 6,
    'category' => '',
    'orderby' => 'date',
    'order' => 'DESC'
));

// Query para buscar downloads
$downloads_query = new WP_Query(array(
    'post_type' => 'download',
    'posts_per_page' => $args['posts_per_page'],
    'post_status' => 'publish',
    'orderby' => $args['orderby'],
    'order' => $args['order'],
    'download_category' => $args['category']
));
?>

<div class="plugins-grid">
    <?php if ($downloads_query->have_posts()) : while ($downloads_query->have_posts()) : $downloads_query->the_post(); ?>
        <article class="plugin-card" data-category="<?php 
            $categories = get_the_terms(get_the_ID(), 'download_category');
            if ($categories && !is_wp_error($categories)) {
                echo esc_attr($categories[0]->slug);
            }
        ?>" data-price="<?php 
            $price = cyfer_get_download_price();
            echo $price == '0.00' ? 'free' : 'paid';
        ?>">
            <div class="plugin-icon">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 100%; object-fit: cover; border-radius: 15px;')); ?>
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
            
            <div class="plugin-price">
                <?php 
                $price = cyfer_get_download_price();
                if ($price == '0.00') {
                    echo '<span style="color: #4CAF50;">Grátis</span>';
                } else {
                    echo 'R$ ' . $price;
                }
                ?>
            </div>
            
            <a href="<?php the_permalink(); ?>" class="buy-button">
                Ver Detalhes
            </a>
        </article>
    <?php endwhile; 
    wp_reset_postdata();
    else : ?>
        <div class="no-plugins" style="grid-column: 1 / -1; text-align: center; padding: 2rem;">
            <div style="font-size: 3rem; color: #ddd; margin-bottom: 1rem;">
                <i class="fas fa-puzzle-piece"></i>
            </div>
            <h3 style="margin-bottom: 1rem; color: #333;">Nenhum plugin disponível</h3>
            <p style="color: #666;">
                Ainda não temos plugins publicados. Em breve teremos novidades!
            </p>
        </div>
    <?php endif; ?>
</div>

<?php if ($downloads_query->found_posts > $args['posts_per_page']) : ?>
    <div style="text-align: center; margin-top: 3rem;">
        <a href="<?php echo esc_url(home_url('/downloads/')); ?>" class="cta-button">
            Ver Todos os Plugins
        </a>
    </div>
<?php endif; ?> 