<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About</h3>
                <p>Development of professional web solutions and high-quality WordPress plugins.</p>
            </div>
            
            <div class="footer-section">
                <h3>Useful Links</h3>
                <p><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></p>
                <p><a href="<?php echo esc_url(home_url('/plugins/')); ?>">Plugins</a></p>
                <p><a href="<?php echo esc_url(home_url('/support/')); ?>">Support</a></p>
            </div>
            
            <div class="footer-section">
                <h3>Contact</h3>
                <p><a href="mailto:contato@ottersynca.com">contato@ottersynca.com</a></p>
                <p><a href="https://www.ottersynca.com" target="_blank">www.ottersynca.com</a></p>
            </div>
            
            <div class="footer-section">
                <h3>My Account</h3>
				<p><a href="https://plugins.cyfer.com.br/login-cliente" target="_blank">Login</a></p>
                <p><a href="https://plugins.cyfer.com.br/meus-pedidos" target="_blank">My Orders</a></p>
<!--                 <p><a href="https://plugins.cyfer.com.br/login-cliente" target="_blank"><i class="fab fa-github"></i> Login</a></p>
                <p><a href="https://plugins.cyfer.com.br/meus-pedidos" target="_blank"><i class="fab fa-linkedin"></i> Meus Pedidos</a></p> -->
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 