<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
            <h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                All Plugins
            </h1>
            
            <p style="color: #666; max-width: 600px; margin: 0 auto;">
                Explore our complete collection of premium WordPress plugins developed by Cyfer Development.
            </p>
        </header>

        <?php if (have_posts()) : ?>
            <!-- Filtros -->
            <div class="plugins-filters" style="margin-bottom: 2rem; text-align: center;">
                <div style="display: flex; justify-content: center; align-items: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1rem;">
                    <select class="plugin-filter" style="padding: 0.75rem 1rem; border: 2px solid #e9ecef; border-radius: 10px; background: white; font-size: 0.95rem; min-width: 200px;">
                        <option value="all">All Categories</option>
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'download_category',
                            'hide_empty' => true,
                        ));
                        
                        if (!is_wp_error($categories)) {
                            foreach ($categories as $category) {
                                echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                            }
                        }
                        ?>
                    </select>
                    
                    <select class="price-filter" style="padding: 0.75rem 1rem; border: 2px solid #e9ecef; border-radius: 10px; background: white; font-size: 0.95rem; min-width: 150px;">
                        <option value="all">All Prices</option>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                    
                    <select class="sort-filter" style="padding: 0.75rem 1rem; border: 2px solid #e9ecef; border-radius: 10px; background: white; font-size: 0.95rem; min-width: 180px;">
                        <option value="date-desc">Newest</option>
                        <option value="date-asc">Oldest</option>
                        <option value="title-asc">A-Z</option>
                        <option value="title-desc">Z-A</option>
                        <option value="price-asc">Lowest Price</option>
                        <option value="price-desc">Highest Price</option>
                    </select>
                    
                    <button class="clear-filters" style="padding: 0.75rem 1.5rem; background: #f8f9fa; border: 2px solid #e9ecef; border-radius: 10px; color: #666; font-size: 0.95rem; cursor: pointer; transition: all 0.3s ease;">
                        <i class="fas fa-times" style="margin-right: 0.5rem;"></i>
                        Clear Filters
                    </button>
                </div>
                
                <div class="results-count" style="color: #666; font-size: 0.95rem; margin-top: 1rem;"></div>
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
                        $price = cyfer_get_download_price();
                        echo $price == '0.00' ? 'free' : 'paid';
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
                        
                        <div class="plugin-price">
                            <?php 
                            $price = cyfer_get_download_price();
                            if ($price == '0.00') {
                                echo '<span style="color: #4CAF50;">Free</span>';
                            } else {
                                echo '$' . $price;
                            }
                            ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="buy-button">
                            View Details
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Paginação -->
            <div class="pagination" style="text-align: center; margin-top: 3rem;">
                <?php
                echo paginate_links(array(
                    'prev_text' => '<i class="fas fa-chevron-left"></i> Previous',
                    'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
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
                <h2 style="margin-bottom: 1rem; color: #333;">No plugins found</h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    We couldn't find any plugins matching your search criteria.
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">
                    Back to Home
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?> 