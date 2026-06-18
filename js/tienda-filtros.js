// tienda-filtros.js - VERSIÓN FINAL
console.log('🔥 tienda-filtros.js INICIADO');

jQuery(document).ready(function($) {
    console.log('✅ jQuery listo');
    
    // Verificar datos
    if (typeof tienda_ajax === 'undefined') {
        console.error('❌ tienda_ajax no definido');
        return;
    }
    console.log('📦 tienda_ajax:', tienda_ajax);
    
    // ============================================
    // TOGGLES
    // ============================================
    $('.filtro-toggle').each(function() {
        var $btn = $(this);
        var target = $btn.data('target');
        var $content = $('#' + target);
        var $icon = $btn.find('.filtro-icono');
        
        if (target === 'filtro-categorias') {
            $content.css('display', 'grid');
            $icon.addClass('rotado');
        } else {
            $content.hide();
            $icon.removeClass('rotado');
        }
        
        $btn.on('click', function(e) {
            e.preventDefault();
            $content.slideToggle(200);
            $icon.toggleClass('rotado');
        });
    });
    
    // ============================================
    // RECOLECTAR FILTROS
    // ============================================
    function getFiltros() {
        var filtros = {
            categorias: [],
            atributos: {}
        };
        
        $('.filtro-categoria:checked').each(function() {
            var cat = $(this).data('categoria');
            if (cat) filtros.categorias.push(cat);
        });
        
        $('.filtro-atributo:checked').each(function() {
            var tax = $(this).data('tax');
            var term = $(this).data('term');
            if (tax && term) {
                if (!filtros.atributos[tax]) filtros.atributos[tax] = [];
                filtros.atributos[tax].push(term);
            }
        });
        
        return filtros;
    }
    
    // ============================================
    // CARGAR PRODUCTOS
    // ============================================
    function loadProducts() {
        var filtros = getFiltros();
        console.log('📦 Enviando:', filtros);
        
        $('#productos-container').html('<div style="padding:20px;text-align:center;">⏳ Cargando...</div>');
        
        $.ajax({
            url: tienda_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'filtrar_productos',
                nonce: tienda_ajax.nonce,
                categorias: filtros.categorias,
                atributos: filtros.atributos
            },
            success: function(response) {
                console.log('✅ RESPONSE:', response);
                
                // Si es string, parsear
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response);
                    } catch(e) {
                        console.error('❌ Error parseando:', e);
                        $('#productos-container').html('<div class="error">Error en el servidor</div>');
                        return;
                    }
                }
                
                // Verificar éxito
                if (response.success) {
                    // Verificar que hay productos
                    if (response.data && response.data.productos) {
                        $('#productos-container').html(response.data.productos);
                    } else {
                        $('#productos-container').html('<div class="error">No hay productos</div>');
                    }
                    
                    if (response.data && response.data.contador) {
                        $('#contador-productos').html(response.data.contador);
                    }
                } else {
                    var msg = response.data ? response.data : 'Error desconocido';
                    $('#productos-container').html('<div class="error">❌ ' + msg + '</div>');
                }
            },
            error: function(xhr, status, error) {
                console.error('❌ Error:', status, error);
                $('#productos-container').html('<div class="error">❌ Error de conexión</div>');
            }
        });
    }
    
    // ============================================
    // EVENTOS
    // ============================================
    $('.filtro-categoria, .filtro-atributo').on('change', function() {
        console.log('🔄 Cambio en filtro');
        loadProducts();
    });
    
    $('#limpiar-filtros').on('click', function(e) {
        e.preventDefault();
        console.log('🧹 Limpiando filtros');
        $('.filtro-categoria, .filtro-atributo').prop('checked', false);
        loadProducts();
    });
    
    // ============================================
    // CARGA INICIAL
    // ============================================
    console.log('🚀 Carga inicial');
    loadProducts();
    
});