(function($) {
    'use strict';

    console.log('✅ producto-single.js INICIADO');

    // ============================================
    // 1. CONTROL DE CANTIDAD
    // ============================================

    var $quantityInput = $('.producto-single_cantidad input.qty-input');
    var $btnMinus = $('.producto-single_cantidad .btn-minus');
    var $btnPlus = $('.producto-single_cantidad .btn-plus');

    // Botón menos
    $btnMinus.on('click', function(e) {
        e.preventDefault();
        var val = parseInt($quantityInput.val()) || 1;
        if (val > 1) $quantityInput.val(val - 1);
    });

    // Botón más
    $btnPlus.on('click', function(e) {
        e.preventDefault();
        var val = parseInt($quantityInput.val()) || 1;
        $quantityInput.val(val + 1);
    });

    // ============================================
    // 2. AGREGAR AL CARRITO
    // ============================================

    $('.producto-single_btn').on('click', function(e) {
        e.preventDefault();
        console.log('🛒 Click en agregar al carrito');

        var $btn = $(this);
        var productId = $btn.data('product-id');
        var quantity = parseInt($quantityInput.val()) || 1;

        if (!productId) {
            alert('Error: Producto no identificado');
            return;
        }

        if (typeof wc_add_to_cart_params === 'undefined') {
            alert('Error: Configuración del carrito no disponible');
            return;
        }

        var data = {
            product_id: productId,
            quantity: quantity
        };

        var ajaxUrl = wc_add_to_cart_params.wc_ajax_url.replace('%%endpoint%%', 'add_to_cart');
        if (ajaxUrl.startsWith('/')) {
            ajaxUrl = window.location.origin + ajaxUrl;
        }

        var originalText = $btn.text();
        $btn.text('Agregando...').prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: data,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            },
            success: function(response) {
                console.log('✅ Respuesta:', response);
                $btn.text(originalText).prop('disabled', false);

                if (response && response.error) {
                    alert('❌ ' + (response.error || 'Error al agregar'));
                    return;
                }

                alert('✅ Producto agregado al carrito');

                if (response.fragments) {
                    $.each(response.fragments, function(key, value) {
                        $(key).replaceWith(value);
                    });
                }

                $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $btn]);
            },
            error: function(xhr, status, error) {
                console.error('❌ Error:', error);
                $btn.text(originalText).prop('disabled', false);
                alert('❌ Error al agregar. Revisa la consola.');
            }
        });
    });

    // ============================================
    // 3. GALERÍA DE IMÁGENES
    // ============================================

    var $mainImage = $('.producto-single_imagen .img_stili');
    var $thumbs = $('.producto-single_thumb');

    if ($thumbs.length) {
        $thumbs.on('click', function() {
            var $thumb = $(this);
            var newImage = $thumb.find('img').attr('src');

            if (newImage) {
                $mainImage.fadeOut(150, function() {
                    $mainImage.attr('src', newImage);
                    $mainImage.fadeIn(150);
                });
                $thumbs.removeClass('is-active');
                $thumb.addClass('is-active');
            }
        });

        if (!$('.producto-single_thumb.is-active').length) {
            $thumbs.first().addClass('is-active');
        }
    }

    // ============================================
    // 4. ZOOM
    // ============================================

    var $lens = $('.zoom-lens');
    var $container = $('.producto-single_imagen');

    if ($lens.length && $container.length) {
        $container.on('mouseenter', function() {
            $lens.css('opacity', '1');
        }).on('mouseleave', function() {
            $lens.css('opacity', '0');
        }).on('mousemove', function(e) {
            var offset = $(this).offset();
            var width = $(this).width();
            var height = $(this).height();

            var x = e.pageX - offset.left - ($lens.width() / 2);
            var y = e.pageY - offset.top - ($lens.height() / 2);

            x = Math.max(0, Math.min(x, width - $lens.width()));
            y = Math.max(0, Math.min(y, height - $lens.height()));

            $lens.css({
                left: x + 'px',
                top: y + 'px',
                backgroundPosition: (x / (width - $lens.width()) * 100) + '% ' + (y / (height - $lens.height()) * 100) + '%'
            });
        });
    }

    // ============================================
    // 5. VARIACIONES
    // ============================================

    $('.producto-single_var').on('click', function() {
        var $btn = $(this);
        $btn.closest('.producto-single_variaciones').find('.producto-single_var').removeClass('is-active');
        $btn.addClass('is-active');
    });

    console.log('✅ producto-single.js LISTO');

})(jQuery);