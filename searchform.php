<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div style="position: relative; display: flex; max-width: 500px; margin: 0 auto;">
        <input type="search" 
               class="search-field" 
               placeholder="Buscar plugins..." 
               value="<?php echo get_search_query(); ?>" 
               name="s"
               style="flex: 1; padding: 1rem 1.5rem; border: 2px solid #f0f0f0; border-radius: 50px 0 0 50px; font-size: 1rem; outline: none; transition: border-color 0.3s ease;" />
        
        <button type="submit" 
                class="search-submit"
                style="padding: 1rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 0 50px 50px 0; cursor: pointer; transition: all 0.3s ease;">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>

<style>
.search-field:focus {
    border-color: #667eea;
}

.search-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102,126,234,0.3);
}
</style> 