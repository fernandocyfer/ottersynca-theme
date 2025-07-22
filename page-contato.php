<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 6rem 0;">
        <div class="container">
            <div style="text-align: center; color: white;">
                <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1rem;">Entre em Contato</h1>
                <p style="font-size: 1.3rem; opacity: 0.9; max-width: 800px; margin: 0 auto;">
                    Estamos aqui para ajudar! Entre em contato conosco para suporte, dúvidas ou parcerias.
                </p>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section style="padding: 5rem 0; background: white;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
                <!-- Formulário -->
                <div>
                    <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 2rem;">Envie sua Mensagem</h2>
                    
                    <form id="contact-form" style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div>
                                <label for="nome" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Nome *</label>
                                <input type="text" id="nome" name="nome" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                            </div>
                            <div>
                                <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Email *</label>
                                <input type="email" id="email" name="email" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                            </div>
                        </div>
                        
                        <div>
                            <label for="assunto" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Assunto *</label>
                            <select id="assunto" name="assunto" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; transition: border-color 0.3s ease;">
                                <option value="">Selecione um assunto</option>
                                <option value="suporte">Suporte Técnico</option>
                                <option value="vendas">Dúvidas sobre Vendas</option>
                                <option value="parceria">Proposta de Parceria</option>
                                <option value="desenvolvimento">Desenvolvimento Personalizado</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="mensagem" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" rows="6" required style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-size: 1rem; resize: vertical; transition: border-color 0.3s ease;"></textarea>
                        </div>
                        
                        <button type="submit" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem 2rem; border: none; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(102,126,234,0.3);">
                            <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
                
                <!-- Informações de Contato -->
                <div>
                    <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 2rem;">Informações de Contato</h2>
                    
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
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Telefone</h3>
                                <p style="color: #666; margin: 0;">+55 (11) 99999-9999</p>
                                <p style="color: #666; margin: 0;">Segunda a Sexta, 9h às 18h</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Endereço</h3>
                                <p style="color: #666; margin: 0;">São Paulo, SP - Brasil</p>
                                <p style="color: #666; margin: 0;">Atendimento remoto</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: #f8f9fa; border-radius: 15px;">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 0.5rem;">Horário de Atendimento</h3>
                                <p style="color: #666; margin: 0;">Segunda a Sexta: 9h às 18h</p>
                                <p style="color: #666; margin: 0;">Suporte 24/7 para clientes premium</p>
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
            <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 3rem;">Perguntas Frequentes</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Como funciona o suporte?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Oferecemos suporte técnico completo para todos os nossos plugins. Clientes premium têm acesso a suporte 24/7 via email e chat.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Os plugins são compatíveis com a versão mais recente do WordPress?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Sim! Todos os nossos plugins são testados e atualizados regularmente para garantir compatibilidade com as versões mais recentes do WordPress.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Posso solicitar um plugin personalizado?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Claro! Desenvolvemos plugins personalizados sob demanda. Entre em contato conosco para discutir suas necessidades específicas.
                    </p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle" style="color: #667eea; margin-right: 0.5rem;"></i>
                        Como funciona o sistema de licenciamento?
                    </h3>
                    <p style="color: #666; line-height: 1.6;">
                        Utilizamos o EDD Software Licensing para gerenciar licenças. Cada compra inclui atualizações gratuitas por 1 ano.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
jQuery(document).ready(function($) {
    // Estilização dos inputs
    $('input, textarea, select').on('focus', function() {
        $(this).css('border-color', '#667eea');
    }).on('blur', function() {
        $(this).css('border-color', '#e9ecef');
    });
    
    // Envio do formulário
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        // Mostra loading
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Enviando...');
        submitBtn.prop('disabled', true);
        
        // Simula envio (substitua pela URL real do seu backend)
        setTimeout(function() {
            alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
            $('#contact-form')[0].reset();
            submitBtn.html(originalText);
            submitBtn.prop('disabled', false);
        }, 2000);
    });
});
</script>

<?php get_footer(); ?> 