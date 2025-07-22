# Cyfer Plugins Theme

Tema WordPress moderno e responsivo para venda de plugins da Cyfer Development.

## Características

- **Design Moderno**: Interface limpa e profissional
- **Totalmente Responsivo**: Funciona perfeitamente em todos os dispositivos
- **Integração EDD**: Suporte completo ao Easy Digital Downloads
- **Software Licensing**: Compatível com EDD Software Licensing
- **Performance Otimizada**: Carregamento rápido e SEO-friendly
- **Customização Fácil**: Cores e estilos facilmente personalizáveis

## Instalação

1. **Faça upload do tema** para `/wp-content/themes/cyfer-plugins/`
2. **Ative o tema** no painel administrativo do WordPress
3. **Instale e configure** o Easy Digital Downloads
4. **Configure o menu** principal em Aparência > Menus
5. **Personalize as cores** editando o arquivo `style.css`

## Plugins Necessários

- **Easy Digital Downloads** - Para vendas de plugins
- **EDD Software Licensing** - Para licenciamento de software
- **EDD Frontend Submissions** - Para submissão de plugins (opcional)

## Configuração

### 1. Menu Principal
Configure o menu principal em **Aparência > Menus** com os seguintes itens:
- Home
- Plugins
- Sobre
- Contato

### 2. Páginas Necessárias
Crie as seguintes páginas:
- **Home** - Página inicial
- **Plugins** - Listagem de plugins
- **Sobre** - Informações sobre a empresa
- **Contato** - Formulário de contato

### 3. Configuração EDD
1. Vá para **Downloads > Configurações**
2. Configure as opções de pagamento
3. Configure as opções de email
4. Configure as opções de licenciamento

## Estrutura de Arquivos

```
cyfer-plugins/
├── style.css              # Estilos principais
├── index.php              # Página inicial
├── single.php             # Página individual de plugin
├── archive.php            # Listagem de plugins
├── header.php             # Cabeçalho
├── footer.php             # Rodapé
├── functions.php          # Funções do tema
├── js/
│   └── main.js           # JavaScript principal
└── README.md             # Este arquivo
```

## Personalização

### Cores
As cores principais podem ser alteradas editando as variáveis CSS no arquivo `style.css`:

```css
:root {
    --primary-color: #667eea;
    --secondary-color: #764ba2;
    --accent-color: #ff6b6b;
    --text-color: #333;
    --light-bg: #fafafa;
}
```

### Logo
1. Vá para **Aparência > Personalizar**
2. Clique em **Identidade do Site**
3. Faça upload do seu logo

### Menus
1. Vá para **Aparência > Menus**
2. Crie ou edite o menu principal
3. Adicione os itens desejados

## Funcionalidades

### Meta Boxes para Plugins
O tema inclui meta boxes personalizadas para plugins:
- Versão do plugin
- Compatibilidade com WordPress
- Lista de funcionalidades

### Filtros
- Filtro por categoria
- Filtro por preço (grátis/pago)
- Busca por nome

### Animações
- Fade in nos cards de plugins
- Smooth scroll para links internos
- Efeitos hover nos botões

## Suporte

Para suporte técnico, entre em contato:
- **Email**: contato@cyfer.com.br
- **Site**: https://www.cyfer.com.br

## Changelog

### Versão 1.0.0
- Lançamento inicial
- Design responsivo
- Integração EDD
- Meta boxes para plugins
- Sistema de filtros

## Licença

Este tema é desenvolvido pela Cyfer Development e está licenciado sob GPL v2 ou posterior.

## Créditos

- **Desenvolvimento**: Cyfer Development
- **Design**: Cyfer Development
- **Fontes**: Google Fonts (Inter)
- **Ícones**: Font Awesome 