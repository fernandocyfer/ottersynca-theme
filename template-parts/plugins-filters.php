<?php
/**
 * Template part para exibir filtros de plugins
 * 
 * @package Cyfer_Plugins
 */

// Evita acesso direto
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="plugins-filters" style="margin-bottom: 2rem; text-align: center;">
    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; align-items: center;">
        <select class="plugin-filter" style="padding: 0.8rem 1.5rem; border: 2px solid #f0f0f0; border-radius: 10px; background: white; font-size: 1rem; min-width: 200px; transition: border-color 0.3s ease;">
            <option value="all">Todas as Categorias</option>
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'download_category',
                'hide_empty' => true,
            ));
            
            if (!is_wp_error($categories)) {
                foreach ($categories as $category) {
                    $selected = (isset($_GET['category']) && $_GET['category'] === $category->slug) ? 'selected' : '';
                    echo '<option value="' . esc_attr($category->slug) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
                }
            }
            ?>
        </select>
        
        <select class="price-filter" style="padding: 0.8rem 1.5rem; border: 2px solid #f0f0f0; border-radius: 10px; background: white; font-size: 1rem; min-width: 150px; transition: border-color 0.3s ease;">
            <option value="all">Todos os Preços</option>
            <option value="free" <?php echo (isset($_GET['price']) && $_GET['price'] === 'free') ? 'selected' : ''; ?>>Grátis</option>
            <option value="paid" <?php echo (isset($_GET['price']) && $_GET['price'] === 'paid') ? 'selected' : ''; ?>>Pagos</option>
        </select>
        
        <select class="sort-filter" style="padding: 0.8rem 1.5rem; border: 2px solid #f0f0f0; border-radius: 10px; background: white; font-size: 1rem; min-width: 150px; transition: border-color 0.3s ease;">
            <option value="date-desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'date-desc') ? 'selected' : ''; ?>>Mais Recentes</option>
            <option value="date-asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'date-asc') ? 'selected' : ''; ?>>Mais Antigos</option>
            <option value="title-asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title-asc') ? 'selected' : ''; ?>>A-Z</option>
            <option value="title-desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title-desc') ? 'selected' : ''; ?>>Z-A</option>
            <option value="price-asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'price-asc') ? 'selected' : ''; ?>>Menor Preço</option>
            <option value="price-desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'price-desc') ? 'selected' : ''; ?>>Maior Preço</option>
        </select>
        
        <button type="button" class="clear-filters" style="padding: 0.8rem 1.5rem; background: #f8f9fa; border: 2px solid #f0f0f0; border-radius: 10px; color: #666; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
            <i class="fas fa-times" style="margin-right: 0.5rem;"></i>
            Limpar Filtros
        </button>
    </div>
    
    <!-- Contador de resultados -->
    <div class="results-count" style="margin-top: 1rem; color: #666; font-size: 0.9rem;">
        <?php
        global $wp_query;
        $total_posts = $wp_query->found_posts;
        if ($total_posts > 0) {
            echo sprintf(
                _n('%d plugin encontrado', '%d plugins encontrados', $total_posts, 'cyfer-plugins'),
                $total_posts
            );
        } else {
            echo 'Nenhum plugin encontrado';
        }
        ?>
    </div>
</div>

<style>
.plugin-filter:focus,
.price-filter:focus,
.sort-filter:focus {
    border-color: #667eea;
    outline: none;
}

.clear-filters:hover {
    background: #e9ecef;
    border-color: #dee2e6;
}
</style> 