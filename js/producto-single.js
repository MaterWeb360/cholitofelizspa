// producto-single.js
jQuery(document).ready(function($) {
    
    console.log('✅ producto-single.js cargado');
    
    // ============================================
    // 1. CONTROL DE CANTIDAD (+ y -)
    // ============================================
    
    var $quantityInput = $('.producto-single_cantidad input');
    var $btnMinus = $('.producto-single_cantidad button:first');
    var $btnPlus = $('.producto-single_cantidad button:last');
    
    console.log('Cantidad input encontrado:', $quantityInput.length);
    console.log('Botón - encontrado:', $btnMinus.length);
    console.log('Botón + encontrado:', $btnPlus.length);
    
    // Botón restar
    $btnMinus.on('click', function(e) {
        e.preventDefault();
        var currentVal = parseInt($quantityInput.val()) || 1;
        if (currentVal > 1) {
            $quantityInput.val(currentVal - 1);
            console.log('Cantidad:', currentVal - 1);
        }
    });
    
    // Botón sumar
    $btnPlus.on('click', function(e) {
        e.preventDefault();
        var currentVal = parseInt($quantityInput.val()) || 1;
        $quantityInput.val(currentVal + 1);
        console.log('Cantidad:', currentVal + 1);
    });
    
    // Validar input manual
    $quantityInput.on('change', function() {
        var val = parseInt($(this).val()) || 1;
        if (val < 1) val = 1;
        $(this).val(val);
    });
    
    // ============================================
    // 2. GALERÍA DE IMÁGENES
    // ============================================
    
    var $mainImage = $('.producto-single_imagen .img_stili');
    var $thumbs = $('.producto-single_thumb');
    
    console.log('Imagen principal encontrada:', $mainImage.length);
    console.log('Miniaturas encontradas:', $thumbs.length);
    
    // Al hacer clic en una miniatura
    $thumbs.on('click', function() {
        var $thumb = $(this);
        var $thumbImg = $thumb.find('img');
        var newImageUrl = $thumbImg.attr('src');
        
        console.log('Miniatura clickeada, nueva imagen:', newImageUrl);
        
        // Cambiar la imagen principal
        $mainImage.fadeOut(150, function() {
            $mainImage.attr('src', newImageUrl);
            $mainImage.fadeIn(150);
        });
        
        // Actualizar el zoom lens
        $('.zoom-lens').css('background-image', 'url(' + newImageUrl + ')');
        
        // Marcar miniatura como activa
        $thumbs.removeClass('is-active');
        $thumb.addClass('is-active');
    });
    
    // Activar primera miniatura por defecto
    if ($thumbs.length > 0 && !$('.producto-single_thumb.is-active').length) {
        $thumbs.first().addClass('is-active');
    }
    
    // ============================================
    // 3. ZOOM EN IMAGEN PRINCIPAL
    // ============================================
    
    var $lens = $('.zoom-lens');
    var $container = $('.producto-single_imagen');
    
    $container.on('mouseenter', function() {
        $lens.css('opacity', '1');
    }).on('mouseleave', function() {
        $lens.css('opacity', '0');
    }).on('mousemove', function(e) {
        var containerOffset = $(this).offset();
        var containerWidth = $(this).width();
        var containerHeight = $(this).height();
        
        var mouseX = e.pageX - containerOffset.left;
        var mouseY = e.pageY - containerOffset.top;
        
        var lensWidth = $lens.width();
        var lensHeight = $lens.height();
        
        var posX = mouseX - (lensWidth / 2);
        var posY = mouseY - (lensHeight / 2);
        
        // Limitar posición
        if (posX < 0) posX = 0;
        if (posY < 0) posY = 0;
        if (posX > containerWidth - lensWidth) posX = containerWidth - lensWidth;
        if (posY > containerHeight - lensHeight) posY = containerHeight - lensHeight;
        
        $lens.css({
            left: posX + 'px',
            top: posY + 'px'
        });
        
        // Calcular posición de fondo para zoom
        var percentX = (posX / (containerWidth - lensWidth)) * 100;
        var percentY = (posY / (containerHeight - lensHeight)) * 100;
        
        $lens.css('background-position', percentX + '% ' + percentY + '%');
    });
    
    // ============================================
    // 4. VARIACIONES
    // ============================================
    
    var selectedVariations = {};
    
    $('.producto-single_var').on('click', function() {
        var $btn = $(this);
        var attribute = $btn.data('attribute');
        var value = $btn.data('value');
        
        $btn.closest('.producto-single_variaciones').find('.producto-single_var').removeClass('is-active');
        $btn.addClass('is-active');
        
        selectedVariations[attribute] = value;
        console.log('Variación seleccionada:', selectedVariations);
    });
    
    // ============================================
    // 5. AGREGAR AL CARRITO
    // ============================================
    
    $('.producto-single_btn').on('click', function(e) {
        e.preventDefault();
        
        var productId = $('input[name="product_id"]').val() || $('.producto-single_btn').data('product-id');
        
        if (!productId) {
            console.error('No se encontró ID del producto');
            alert('Error: No se pudo identificar el producto');
            return;
        }
        
        var quantity = $quantityInput.val();
        
        console.log('Agregar al carrito - Producto:', productId, 'Cantidad:', quantity);
        alert('Producto agregado al carrito. ID: ' + productId + ' Cantidad: ' + quantity);
        
        // Aquí iría la llamada AJAX real
        // Por ahora es una demo
    });
    
    console.log('✅ producto-single.js inicializado correctamente');
});