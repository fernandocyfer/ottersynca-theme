<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="error-404" style="text-align: center; padding: 4rem 0;">
            <div style="font-size: 8rem; color: #667eea; margin-bottom: 2rem; font-weight: 700;">
                404
            </div>
            
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #333;">
                Página não encontrada
            </h1>
            
            <p style="color: #666; margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                A página que você está procurando não existe ou foi movida. 
                Tente usar a busca abaixo ou navegue pelas opções disponíveis.
            </p>
            
            <!-- Formulário de busca -->
            <div style="max-width: 400px; margin: 0 auto 3rem;">
                <?php get_search_form(); ?>
            </div>
            
            <!-- Links úteis -->
            <div class="useful-links" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 600px; margin: 0 auto 3rem;">
                <div class="link-card" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <div style="font-size: 2rem; color: #667eea; margin-bottom: 1rem;">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Página Inicial</h3>
                    <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #667eea; text-decoration: none; font-weight: 600;">
                        Voltar ao início
                    </a>
                </div>
                
                <div class="link-card" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <div style="font-size: 2rem; color: #667eea; margin-bottom: 1rem;">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Plugins</h3>
                    <a href="<?php echo esc_url(home_url('/plugins/')); ?>" style="color: #667eea; text-decoration: none; font-weight: 600;">
                        Ver todos os plugins
                    </a>
                </div>
                
                <div class="link-card" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <div style="font-size: 2rem; color: #667eea; margin-bottom: 1rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 style="margin-bottom: 1rem; color: #333;">Contato</h3>
                    <a href="<?php echo esc_url(home_url('/contato/')); ?>" style="color: #667eea; text-decoration: none; font-weight: 600;">
                        Entre em contato
                    </a>
                </div>
            </div>
            
            <!-- Botão principal -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-button">
                Voltar ao Início
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?> 