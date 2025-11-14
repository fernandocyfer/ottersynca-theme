<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 6rem 0;">
        <div class="container">
            <div style="text-align: center; color: white;">
                <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem;">Contact Us</h1>
                <p style="font-size: 1.3rem; opacity: 0.9; max-width: 800px; margin: 0 auto;">
                    We're here to help! Contact us for support, questions, or partnerships.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section style="padding: 5rem 0; background: white;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
                <!-- Form -->
                <div>
                    <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 2rem;">Send Your Message</h2>
                    
                    <form id="contact-form" style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div>
                                <label for="nome" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Name *</label>
                                <input type="text" id="nome" name="nome" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                            </div>
                            <div>
                                <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Email *</label>
                                <input type="email" id="email" name="email" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                            </div>
                        </div>
                        
                        <div>
                            <label for="assunto" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Subject *</label>
                            <select id="assunto" name="assunto" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                                <option value="">Select a subject</option>
                                <option value="suporte">Technical Support</option>
                                <option value="vendas">Sales Questions</option>
                                <option value="parceria">Partnership Proposal</option>
                                <option value="desenvolvimento">Custom Development</option>
                                <option value="outro">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="mensagem" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Message *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; resize: vertical; transition: border-color 0.3s ease;"></textarea>
                        </div>
                        
                        <button type="submit" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem 2rem; border: none; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(102,126,234,0.3);">
                            <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div>
                    <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 2rem;">Contact Information</h2>
                    
                    <div style="display: flex; flex-direction: column; gap: 2rem;">
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Email</h3>
                                <p style="color: #666; margin: 0;">contato@cyfer.com.br</p>
                                <p style="color: #666; margin: 0;">suporte@cyfer.com.br</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Phone</h3>
                                <p style="color: #666; margin: 0;">+55 (11) 99999-9999</p>
                                <p style="color: #666; margin: 0;">Monday to Friday, 9am to 6pm</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Address</h3>
                                <p style="color: #666; margin: 0;">São Paulo, SP - Brazil</p>
                                <p style="color: #666; margin: 0;">Remote support</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Business Hours</h3>
                                <p style="color: #666; margin: 0;">Monday to Friday: 9am to 6pm</p>
                                <p style="color: #666; margin: 0;">24/7 support for premium clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section style="padding: 5rem 0; background: #f8f9fa;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 3rem;">Frequently Asked Questions</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        How does support work?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        We offer complete technical support for all our plugins. Premium clients have access to 24/7 support via email and chat.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Are plugins compatible with the latest WordPress version?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Yes! All our plugins are tested and regularly updated to ensure compatibility with the latest WordPress versions.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Can I request a custom plugin?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Of course! We develop custom plugins on demand. Contact us to discuss your specific needs.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        How does the licensing system work?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        We use EDD Software Licensing to manage licenses. Each purchase includes free updates for 1 year.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // Input styling
    $('input, textarea, select').on('focus', function() {
        $(this).css('border-color', '#667eea');
    }).on('blur', function() {
        $(this).css('border-color', '#e9ecef');
    });
    
    // Form submission
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        // Show loading
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
        submitBtn.prop('disabled', true);
        
        // Simulate sending (replace with your real backend URL)
        setTimeout(function() {
            alert('Message sent successfully! We will contact you soon.');
            $('#contact-form')[0].reset();
            submitBtn.html(originalText);
            submitBtn.prop('disabled', false);
        }, 2000);
    });
});
</script>

<?php get_footer(); ?>
