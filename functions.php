<?php
/**
 * Cyfer Plugins Theme Functions
 */

// Evita acesso direto
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configurações do tema
 */
function cyfer_plugins_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a logo personalizada
    add_theme_support('custom-logo');
    
    // Suporte a miniaturas destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registra menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'cyfer-plugins'),
        'footer' => __('Menu Rodapé', 'cyfer-plugins'),
    ));
}
add_action('after_setup_theme', 'cyfer_plugins_setup');

/**
 * Registra scripts e estilos
 */
add_action('wp_enqueue_scripts', 'cyfer_plugins_scripts');
function cyfer_plugins_scripts() 
{
    wp_enqueue_style (
        'cyfer-plugins-style', 
        get_stylesheet_uri(), 
        array(), 
        '1.0.0'
    );
    
    wp_enqueue_script (
        'cyfer-plugins-script', 
        get_template_directory_uri() . '/js/main.js', 
        array('jquery'), 
        '1.0.0', 
        true
    );
}

/**
 * Adiciona suporte a EDD
 */
function cyfer_plugins_edd_support() {
    // Verifica se o EDD está ativo
    if (class_exists('Easy_Digital_Downloads')) {
        // Adiciona suporte a downloads como post type
        add_theme_support('easy-digital-downloads');
    }
}
add_action('after_setup_theme', 'cyfer_plugins_edd_support');

/**
 * Função auxiliar para obter preço do download
 */
function cyfer_get_download_price($download_id = null) {
    if (!$download_id) {
        $download_id = get_the_ID();
    }
    
    if (function_exists('edd_get_download_price')) {
        return edd_get_download_price($download_id);
    }
    
    // Fallback se EDD não estiver ativo
    $price = get_post_meta($download_id, 'edd_price', true);
    return $price ? $price : '0.00';
}

/**
 * Função auxiliar para obter link de compra
 */
function cyfer_get_purchase_link($download_id = null) {
    if (!$download_id) {
        $download_id = get_the_ID();
    }
    
    if (function_exists('edd_get_purchase_link')) {
        return edd_get_purchase_link(array('download_id' => $download_id));
    }
    
    // Fallback se EDD não estiver ativo
    return '<a href="' . esc_url(home_url('/contato/')) . '" class="buy-button">Solicitar Orçamento</a>';
}

/**
 * Função para buscar downloads
 */
function cyfer_get_downloads($args = array()) {
    $defaults = array(
        'post_type' => 'download',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    $args = wp_parse_args($args, $defaults);
    
    return new WP_Query($args);
}

/**
 * Customiza o excerpt
 */
function cyfer_plugins_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'cyfer_plugins_excerpt_length');

function cyfer_plugins_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cyfer_plugins_excerpt_more');

/**
 * Adiciona meta boxes para plugins
 */
function cyfer_plugins_add_meta_boxes() {
    add_meta_box(
        'plugin_details',
        'Detalhes do Plugin',
        'cyfer_plugins_meta_box_callback',
        'download',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'cyfer_plugins_add_meta_boxes');

/**
 * Callback para meta box
 */
function cyfer_plugins_meta_box_callback($post) {
    wp_nonce_field('cyfer_plugins_save_meta_box', 'cyfer_plugins_meta_box_nonce');
    
    $plugin_version = get_post_meta($post->ID, 'plugin_version', true);
    $wp_version = get_post_meta($post->ID, 'wp_version', true);
    $plugin_features = get_post_meta($post->ID, 'plugin_features', true);
    
    if (!is_array($plugin_features)) {
        $plugin_features = array();
    }
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="plugin_version">Versão do Plugin</label></th>
            <td>
                <input type="text" id="plugin_version" name="plugin_version" value="<?php echo esc_attr($plugin_version); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="wp_version">Versão do WordPress</label></th>
            <td>
                <input type="text" id="wp_version" name="wp_version" value="<?php echo esc_attr($wp_version); ?>" class="regular-text" placeholder="5.0+" />
            </td>
        </tr>
        <tr>
            <th><label>Funcionalidades</label></th>
            <td>
                <div id="features-container">
                    <?php foreach ($plugin_features as $index => $feature) : ?>
                        <div class="feature-row">
                            <input type="text" name="plugin_features[]" value="<?php echo esc_attr($feature); ?>" class="regular-text" />
                            <button type="button" class="remove-feature button">Remover</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" id="add-feature" class="button">Adicionar Funcionalidade</button>
            </td>
        </tr>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('#add-feature').click(function() {
            var newRow = '<div class="feature-row"><input type="text" name="plugin_features[]" class="regular-text" /><button type="button" class="remove-feature button">Remover</button></div>';
            $('#features-container').append(newRow);
        });
        
        $(document).on('click', '.remove-feature', function() {
            $(this).parent().remove();
        });
    });
    </script>
    <?php
}

/**
 * Salva meta box
 */
function cyfer_plugins_save_meta_box($post_id) {
    if (!isset($_POST['cyfer_plugins_meta_box_nonce']) || !wp_verify_nonce($_POST['cyfer_plugins_meta_box_nonce'], 'cyfer_plugins_save_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['plugin_version'])) {
        update_post_meta($post_id, 'plugin_version', sanitize_text_field($_POST['plugin_version']));
    }
    
    if (isset($_POST['wp_version'])) {
        update_post_meta($post_id, 'wp_version', sanitize_text_field($_POST['wp_version']));
    }
    
    if (isset($_POST['plugin_features']) && is_array($_POST['plugin_features'])) {
        $features = array_filter(array_map('sanitize_text_field', $_POST['plugin_features']));
        update_post_meta($post_id, 'plugin_features', $features);
    }
}
add_action('save_post', 'cyfer_plugins_save_meta_box');

/**
 * Adiciona estilos para admin
 */
function cyfer_plugins_admin_styles() {
    echo '<style>
        .feature-row {
            margin-bottom: 10px;
        }
        .feature-row input {
            margin-right: 10px;
        }
    </style>';
}
add_action('admin_head', 'cyfer_plugins_admin_styles');

/**
 * Adiciona suporte a excerpt para downloads
 */
function cyfer_plugins_add_excerpt_support() {
    add_post_type_support('download', 'excerpt');
}
add_action('init', 'cyfer_plugins_add_excerpt_support');

/**
 * Debug: Verifica se EDD está ativo
 */
function cyfer_debug_edd_status() {
    if (is_admin()) {
        if (class_exists('Easy_Digital_Downloads')) {
            error_log('EDD está ativo');
        } else {
            error_log('EDD NÃO está ativo');
        }
    }
}
add_action('init', 'cyfer_debug_edd_status');

/**
 * Menu padrão para o tema
 */
function cyfer_default_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/downloads/')) . '">Plugins</a></li>';
    echo '<li><a href="' . esc_url(home_url('/sobre/')) . '">Sobre</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contato/')) . '">Contato</a></li>';
    echo '</ul>';
} 