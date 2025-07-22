<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Sobre a Cyfer</h3>
                <p>Desenvolvimento de soluções web profissionais e plugins WordPress de alta qualidade.</p>
            </div>
            
            <div class="footer-section">
                <h3>Links Úteis</h3>
                <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p>
                <p><a href="<?php echo esc_url(home_url('/plugins/')); ?>">Plugins</a></p>
                <p><a href="<?php echo esc_url(home_url('/suporte/')); ?>">Suporte</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Contato</h3>
                <p><a href="mailto:contato@cyfer.com.br">contato@cyfer.com.br</a></p>
                <p><a href="https://www.cyfer.com.br" target="_blank">www.cyfer.com.br</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <p><a href="#" target="_blank"><i class="fab fa-github"></i> GitHub</a></p>
                <p><a href="#" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 