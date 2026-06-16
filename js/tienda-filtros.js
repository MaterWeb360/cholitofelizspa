// tienda-filtros.js - Versión SIMPLIFICADA y CORREGIDA
console.log('JS de filtros cargado');

// Esperar a que jQuery esté listo
function waitForJQuery() {
    if (typeof jQuery !== 'undefined') {
        jQuery(document).ready(function($) {
            console.log('✅ jQuery listo');
            
            // Verificar datos AJAX
            if (typeof tienda_ajax === 'undefined') {
                console.error('❌ tienda_ajax no definido');
                return;
            }
            
            // ============================================
            // TOGGLES SIMPLIFICADOS - NUEVA VERSIÓN
            // ============================================
            // Primero, remover cualquier evento existente
            $('.filtro-toggle').off('click');
            
            // Configurar cada toggle individualmente
            $('.filtro-toggle').each(function() {
                var $titulo = $(this);
                var targetId = $titulo.data('target');
                var $contenido = $('#' + targetId);
                var $icono = $titulo.find('.filtro-icono');
                
                // Estado inicial: SOLO categorías abiertas, todo lo demás cerrado
				if (targetId === 'filtro-categorias') {
				    $contenido.css('display', 'grid');   // ✅ Usar grid en vez de block
				    $icono.addClass('rotado');
				} else {
				    $contenido.css('display', 'none');
				    $icono.removeClass('rotado');
				}
                
                // Evento click
                $titulo.on('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Verificar estado actual
                    if ($contenido.css('display') === 'none') {
                        // Abrir
                        $contenido.slideDown(200);
                        $icono.addClass('rotado');
                        console.log('Abriendo:', targetId);
                    } else {
                        // Cerrar
                        $contenido.slideUp(200);
                        $icono.removeClass('rotado');
                        console.log('Cerrando:', targetId);
                    }
                });
            });
            
            // ============================================
            // FUNCIONES DE FILTRADO
            // ============================================
            
            function recolectarFiltros() {
                var filtros = {
                    categorias: [],
                    atributos: {}
                };
                
                $('.filtro-categoria:checked').each(function() {
                    filtros.categorias.push($(this).data('categoria'));
                });
                
                $('.filtro-atributo:checked').each(function() {
                    var tax = $(this).data('tax');
                    var term = $(this).data('term');
                    if (!filtros.atributos[tax]) filtros.atributos[tax] = [];
                    filtros.atributos[tax].push(term);
                });
                
                return filtros;
            }
            
            function cargarProductos() {
                var filtros = recolectarFiltros();
                console.log('Filtros activos:', filtros);
                
                $('#productos-container').html('<div class="loading-spinner">🔄 Cargando productos...</div>');
                
                $.ajax({
                    url: tienda_ajax.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'filtrar_productos',
                        nonce: tienda_ajax.nonce,
                        pagina: 1,
                        categorias: filtros.categorias,
                        atributos: filtros.atributos
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#productos-container').html(response.data.productos);
                            $('#paginacion-container').html(response.data.paginacion);
                            $('#contador-productos').html(response.data.contador);
                            
                            $('.pagina-btn').on('click', function() {
                                var pagina = $(this).data('pagina');
                                cargarProductosPagina(pagina);
                            });
                        } else {
                            $('#productos-container').html('<div class="error">Error: No se encontraron productos</div>');
                        }
                    },
                    error: function() {
                        $('#productos-container').html('<div class="error">Error de conexión</div>');
                    }
                });
            }
            
            function cargarProductosPagina(pagina) {
                var filtros = recolectarFiltros();
                
                $('#productos-container').html('<div class="loading-spinner">🔄 Cargando...</div>');
                
                $.ajax({
                    url: tienda_ajax.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'filtrar_productos',
                        nonce: tienda_ajax.nonce,
                        pagina: pagina,
                        categorias: filtros.categorias,
                        atributos: filtros.atributos
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#productos-container').html(response.data.productos);
                            $('#paginacion-container').html(response.data.paginacion);
                            $('#contador-productos').html(response.data.contador);
                            
                            $('.pagina-btn').on('click', function() {
                                cargarProductosPagina($(this).data('pagina'));
                            });
                        }
                    }
                });
            }
            
            // ============================================
            // EVENTOS
            // ============================================
            
            $('.filtro-categoria, .filtro-atributo').on('change', function() {
                console.log('Checkbox cambiado');
                cargarProductos();
            });
            
            $('#limpiar-filtros').on('click', function(e) {
                e.preventDefault();
                console.log('Limpiando filtros');
                $('.filtro-categoria, .filtro-atributo').prop('checked', false);
                cargarProductos();
            });
            
            // Carga inicial
            cargarProductos();
        });
    } else {
        setTimeout(waitForJQuery, 100);
    }
}

waitForJQuery();