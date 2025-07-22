<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Plugins Premium para WordPress</h1>
            <p>Soluções profissionais desenvolvidas pela Cyfer Development para impulsionar seu site WordPress</p>
            <a href="#plugins" class="cta-button">Ver Plugins</a>
        </div>
    </section>

    <!-- Plugins Section -->
    <section id="plugins" class="plugins-section">
        <div class="container">
            <h2 class="section-title">Nossos Plugins</h2>
            
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
            <h2 class="section-title">Por que escolher nossos plugins?</h2>
            
            <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Segurança Garantida</h3>
                    <p style="color: #666;">Todos os plugins são desenvolvidos seguindo as melhores práticas de segurança do WordPress.</p>
                </div>
                
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Suporte Premium</h3>
                    <p style="color: #666;">Suporte técnico especializado para todos os nossos plugins premium.</p>
                </div>
                
                <div class="feature-card" style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Atualizações Regulares</h3>
                    <p style="color: #666;">Atualizações constantes para manter compatibilidade e adicionar novas funcionalidades.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?> 