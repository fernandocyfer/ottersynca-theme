<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Premium WordPress Plugins</h1>
            <p>Professional solutions to boost your WordPress site</p>
            <a href="#plugins" class="cta-button">View Plugins</a>
        </div>
    </section>

    <!-- Plugins Section -->
    <section id="plugins" class="plugins-section">
        <div class="container">
            <h2 class="section-title">Our Plugins</h2>
            
            <?php 
            get_template_part('template-parts/plugins-grid', null, array(
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            )); 
            ?>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" style="background: #f8f9fa; padding: 4rem 0;">
        <div class="container">
            <h2 class="section-title">Why Choose Our Plugins?</h2>
            
            <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Guaranteed Security</h3>
                    <p style="color: #666;">All plugins are developed following WordPress security best practices.</p>
                </div>
                
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Premium Support</h3>
                    <p style="color: #666;">Specialized technical support for all our premium plugins.</p>
                </div>
                
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Regular Updates</h3>
                    <p style="color: #666;">Constant updates to maintain compatibility and add new features.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 