/**
 * Cyfer Plugins Theme JavaScript
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        
        // Smooth scroll for internal links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
            }
        });

        // Fade in animation for plugin cards
        function animatePluginCards() {
            $('.plugin-card').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.addClass('fade-in');
                }, index * 100);
            });
        }

        // Execute animation when page loads
        animatePluginCards();

        // Animation on scroll
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            $('.plugin-card').each(function() {
                var $this = $(this);
                var elementTop = $this.offset().top;
                
                if (scrollTop + windowHeight > elementTop) {
                    $this.addClass('fade-in');
                }
            });
        });

        // Menu mobile toggle
        $('.mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.site-navigation').toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        // Close mobile menu when clicking a link
        $('.nav-menu a').on('click', function() {
            $('.mobile-menu-toggle').removeClass('active');
            $('.site-navigation').removeClass('active');
            $('body').removeClass('menu-open');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.site-navigation, .mobile-menu-toggle').length) {
                $('.mobile-menu-toggle').removeClass('active');
                $('.site-navigation').removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Add active class to header on scroll
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });

        // Lazy loading para imagens
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Download counter (example)
        function updateDownloadCount() {
            $('.download-count').each(function() {
                var $this = $(this);
                var currentCount = parseInt($this.text());
                var newCount = currentCount + Math.floor(Math.random() * 5);
                $this.text(newCount);
            });
        }

        // Update counter every 30 seconds (demo only)
        // setInterval(updateDownloadCount, 30000);

        // Contact form
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            
            var formData = $(this).serialize();
            
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    alert('Message sent successfully!');
                    $('#contact-form')[0].reset();
                },
                error: function() {
                    alert('Error sending message. Please try again.');
                }
            });
        });

        // Advanced filter system
        function filterPlugins() {
            var category = $('.plugin-filter').val();
            var price = $('.price-filter').val();
            var sort = $('.sort-filter').val();
            
            $('.plugin-card').each(function() {
                var $card = $(this);
                var cardCategory = $card.data('category');
                var cardPrice = $card.data('price');
                var showCard = true;
                
                // Filter by category
                if (category !== 'all' && cardCategory !== category) {
                    showCard = false;
                }
                
                // Filter by price
                if (price !== 'all' && cardPrice !== price) {
                    showCard = false;
                }
                
                if (showCard) {
                    $card.fadeIn(300);
                } else {
                    $card.fadeOut(300);
                }
            });
            
            // Update results counter
            updateResultsCount();
        }

        // Update results counter
        function updateResultsCount() {
            var visibleCards = $('.plugin-card:visible').length;
            var totalCards = $('.plugin-card').length;
            
            if (visibleCards === 0) {
                $('.results-count').text('No plugins found');
            } else if (visibleCards === totalCards) {
                $('.results-count').text(visibleCards + ' plugin' + (visibleCards > 1 ? 's' : '') + ' found');
            } else {
                $('.results-count').text(visibleCards + ' of ' + totalCards + ' plugin' + (totalCards > 1 ? 's' : '') + ' found');
            }
        }

        // Initialize filters on plugins page
        if ($('.plugin-filter').length > 0) {
            updateResultsCount();
        }

        // Event listeners for filters
        $('.plugin-filter, .price-filter, .sort-filter').on('change', function() {
            filterPlugins();
        });

        // Clear filters
        $('.clear-filters').on('click', function() {
            $('.plugin-filter').val('all');
            $('.price-filter').val('all');
            $('.sort-filter').val('date-desc');
            filterPlugins();
        });

        // Plugin sorting
        function sortPlugins(sortType) {
            var $grid = $('.plugins-grid');
            var $cards = $grid.find('.plugin-card').get();
            
            $cards.sort(function(a, b) {
                var $a = $(a);
                var $b = $(b);
                
                switch(sortType) {
                    case 'title-asc':
                        return $a.find('.plugin-title').text().localeCompare($b.find('.plugin-title').text());
                    case 'title-desc':
                        return $b.find('.plugin-title').text().localeCompare($a.find('.plugin-title').text());
                    case 'price-asc':
                        var priceA = parseFloat($a.find('.plugin-price').text().replace(/[^\d.,]/g, '').replace(',', '.'));
                        var priceB = parseFloat($b.find('.plugin-price').text().replace(/[^\d.,]/g, '').replace(',', '.'));
                        if (isNaN(priceA)) priceA = 0;
                        if (isNaN(priceB)) priceB = 0;
                        return priceA - priceB;
                    case 'price-desc':
                        var priceA = parseFloat($a.find('.plugin-price').text().replace(/[^\d.,]/g, '').replace(',', '.'));
                        var priceB = parseFloat($b.find('.plugin-price').text().replace(/[^\d.,]/g, '').replace(',', '.'));
                        if (isNaN(priceA)) priceA = 0;
                        if (isNaN(priceB)) priceB = 0;
                        return priceB - priceA;
                    case 'date-asc':
                        return new Date($a.find('.plugin-meta .fa-calendar').parent().text()) - new Date($b.find('.plugin-meta .fa-calendar').parent().text());
                    case 'date-desc':
                    default:
                        return new Date($b.find('.plugin-meta .fa-calendar').parent().text()) - new Date($a.find('.plugin-meta .fa-calendar').parent().text());
                }
            });
            
            $grid.append($cards);
        }

        // Event listener for sorting
        $('.sort-filter').on('change', function() {
            var sortType = $(this).val();
            sortPlugins(sortType);
        });

        // Add hover effect to buttons
        $('.buy-button, .cta-button').hover(
            function() {
                $(this).addClass('hover');
            },
            function() {
                $(this).removeClass('hover');
            }
        );

        // Preloader (opcional)
        $(window).on('load', function() {
            $('.preloader').fadeOut('slow');
        });

        // Back to top button
        var backToTop = $('<button class="back-to-top" style="position: fixed; bottom: 20px; right: 20px; background: #667eea; color: white; border: none; border-radius: 50%; width: 50px; height: 50px; cursor: pointer; display: none; z-index: 1000; transition: all 0.3s ease;"><i class="fas fa-arrow-up"></i></button>');
        $('body').append(backToTop);

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                backToTop.fadeIn();
            } else {
                backToTop.fadeOut();
            }
        });

        backToTop.click(function() {
            $('html, body').animate({scrollTop: 0}, 800);
        });

        // Hover effects para cards
        $('.plugin-card').hover(
            function() {
                $(this).find('.plugin-icon').css('transform', 'scale(1.05)');
            },
            function() {
                $(this).find('.plugin-icon').css('transform', 'scale(1)');
            }
        );

        // Initialize results counter
        updateResultsCount();

    });

})(jQuery); 