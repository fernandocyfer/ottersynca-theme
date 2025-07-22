# Configuração do Tema Cyfer Plugins

## 🚀 Configuração Inicial

### 1. Ativar o Tema
1. Vá para **Aparência > Temas**
2. Ative o tema "Cyfer Plugins"

### 2. Configurar a Página Inicial

**Opção A: Página Estática (Recomendado)**
1. Vá para **Configurações > Leitura**
2. Selecione "Uma página estática"
3. Escolha uma página para a página inicial (crie uma chamada "Home" se necessário)
4. Escolha uma página para os posts (crie uma chamada "Blog" se necessário)

**Opção B: Posts Mais Recentes**
1. Vá para **Configurações > Leitura**
2. Selecione "Sua página inicial exibe: Posts mais recentes"
3. O tema irá exibir automaticamente os downloads do EDD

### 3. Instalar e Configurar o EDD

1. **Instalar Easy Digital Downloads**
   - Vá para **Plugins > Adicionar Novo**
   - Procure por "Easy Digital Downloads"
   - Instale e ative

2. **Configurar EDD**
   - Vá para **Downloads > Configurações**
   - Configure as opções de pagamento
   - Configure as opções de email
   - Configure as opções de licenciamento (se usar EDD Software Licensing)

### 4. Criar Downloads (Plugins)

1. Vá para **Downloads > Adicionar Novo**
2. Preencha:
   - **Título**: Nome do plugin
   - **Descrição**: Descrição detalhada
   - **Resumo**: Breve descrição (aparece nos cards)
   - **Preço**: Defina o preço
   - **Arquivo**: Faça upload do arquivo .zip do plugin
   - **Imagem destacada**: Screenshot do plugin

3. **Meta Box "Detalhes do Plugin"**
   - **Versão do Plugin**: Ex: 1.0.0
   - **Versão do WordPress**: Ex: 5.0+
   - **Funcionalidades**: Lista de recursos

### 5. Configurar Menu

1. Vá para **Aparência > Menus**
2. Crie um novo menu chamado "Menu Principal"
3. Adicione os itens:
   - Home
   - Plugins (link para /downloads/)
   - Sobre
   - Contato
4. Selecione "Menu Principal" na localização "Menu Principal"

### 6. Criar Páginas Necessárias

**Página "Home"**
- Título: Home
- Conteúdo: Deixe vazio (o tema irá exibir o conteúdo automaticamente)

**Página "Sobre"**
- Título: Sobre a Cyfer
- Conteúdo: Informações sobre a empresa

**Página "Contato"**
- Título: Contato
- Conteúdo: Formulário de contato ou informações de contato

## 🔧 Configurações Avançadas

### Personalizar Cores
Edite o arquivo `style.css` e altere as variáveis CSS:

```css
:root {
    --primary-color: #667eea;    /* Azul principal */
    --secondary-color: #764ba2;  /* Roxo secundário */
    --accent-color: #ff6b6b;     /* Vermelho destaque */
    --text-color: #333;          /* Cor do texto */
    --light-bg: #fafafa;         /* Fundo claro */
}
```

### Adicionar Logo
1. Vá para **Aparência > Personalizar**
2. Clique em **Identidade do Site**
3. Faça upload do seu logo

### Configurar SEO
1. Instale um plugin de SEO (Yoast SEO, RankMath, etc.)
2. Configure as meta tags para cada download
3. Adicione schema markup se necessário

## 📁 Estrutura de URLs

- **Home**: `/`
- **Todos os Plugins**: `/downloads/`
- **Plugin Individual**: `/downloads/nome-do-plugin/`
- **Categoria**: `/downloads/category/nome-categoria/`
- **Tag**: `/downloads/tag/nome-tag/`

## 🎨 Personalização do Design

### Alterar Gradientes
No arquivo `style.css`, procure por:

```css
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
```

E altere as cores conforme necessário.

### Alterar Fontes
No arquivo `header.php`, altere o link do Google Fonts:

```html
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
```

## 🔍 Solução de Problemas

### Produtos não aparecem na home
1. Verifique se o EDD está ativo
2. Verifique se existem downloads publicados
3. Verifique se os downloads têm status "Publicado"

### Erro de função não definida
1. Certifique-se de que o EDD está instalado e ativo
2. Verifique se não há conflitos com outros plugins

### Página não encontrada (404)
1. Vá para **Configurações > Links Permanentes**
2. Clique em "Salvar Alterações" para regenerar as regras de rewrite

### Estilos não carregam
1. Verifique se o tema está ativo
2. Limpe o cache do navegador
3. Verifique se não há plugins de cache interferindo

## 📞 Suporte

Para suporte técnico:
- **Email**: contato@cyfer.com.br
- **Site**: https://www.cyfer.com.br

## 📝 Changelog

### Versão 1.0.0
- Lançamento inicial
- Suporte completo ao EDD
- Design responsivo
- Meta boxes personalizadas
- Sistema de filtros
- Integração com Software Licensing 