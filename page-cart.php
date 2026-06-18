<?php
/**
 * Template Name: Carrito Personalizado
 */

get_header(); ?>

<section class="cart-seccion">
  <div class="cart-container">

    <!-- TÍTULO -->
    <div class="cart-header">
      <h1 class="cart-titulo">🛒 Mi Carrito</h1>
      <p class="cart-subtitulo">Revisa tus productos antes de finalizar la compra</p>
    </div>

    <!-- CONTENIDO DEL CARRITO (WooCommerce) -->
    <div class="cart-contenido">
      <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>

  </div>
</section>

<style>
/* ====== SECCIÓN ====== */
.cart-seccion {
  padding: 60px 20px;
  background-color: #fcf9f4;
  min-height: 70vh;
}

.cart-container {
  max-width: 1100px;
  margin: 0 auto;
}

/* ====== ENCABEZADO ====== */
.cart-header {
  text-align: center;
  margin-bottom: 40px;
}

.cart-titulo {
  font-size: 2.4rem;
  font-weight: 700;
  color: #4b2f1e;
  margin-bottom: 8px;
}

.cart-subtitulo {
  font-size: 1.1rem;
  color: #7a5f4a;
  font-weight: 300;
}

/* ====== CONTENIDO DEL CARRITO ====== */
.cart-contenido {
  background: #ffffff;
  padding: 30px;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(75, 47, 30, 0.06);
  border: 1px solid rgba(181, 147, 75, 0.12);
}

/* ====== ESTILOS WOOCOMMERCE ====== */
.cart-contenido table.shop_table {
  border-collapse: collapse;
  width: 100%;
  font-size: 0.95rem;
  color: #4b2f1e;
}

.cart-contenido table.shop_table th {
  background-color: #4b2f1e;
  color: #ffffff;
  padding: 14px 12px;
  text-align: left;
  font-weight: 600;
}

.cart-contenido table.shop_table td {
  padding: 16px 12px;
  border-bottom: 1px solid #f0ebe4;
  vertical-align: middle;
}

.cart-contenido table.shop_table tr:last-child td {
  border-bottom: none;
}

/* ====== PRODUCTO IMAGEN ====== */
.cart-contenido .product-thumbnail img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 8px;
  border: 1px solid #e8e0d6;
}

/* ====== NOMBRE PRODUCTO ====== */
.cart-contenido .product-name a {
  color: #4b2f1e;
  font-weight: 600;
  text-decoration: none;
}

.cart-contenido .product-name a:hover {
  color: #b5934b;
}

/* ====== CANTIDAD ====== */
.cart-contenido .quantity input[type="number"] {
  width: 60px;
  padding: 8px 6px;
  border: 1px solid #d4cbc0;
  border-radius: 8px;
  font-size: 1rem;
  text-align: center;
  background: #fcf9f4;
}

/* ====== BOTÓN ACTUALIZAR ====== */
.cart-contenido button[name="update_cart"] {
  background-color: #b5934b;
  color: #ffffff;
  border: none;
  padding: 10px 24px;
  border-radius: 50px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.25s;
}

.cart-contenido button[name="update_cart"]:hover {
  background-color: #9c7d3e;
  transform: translateY(-1px);
}

/* ====== BOTÓN ELIMINAR ====== */
.cart-contenido .product-remove a {
  color: #c0392b;
  font-size: 1.3rem;
  text-decoration: none;
}

.cart-contenido .product-remove a:hover {
  color: #e74c3c;
}

/* ====== TOTALES ====== */
.cart-contenido .cart_totals {
  margin-top: 30px;
  border-top: 2px solid #b5934b;
  padding-top: 24px;
}

.cart-contenido .cart_totals h2 {
  font-size: 1.3rem;
  color: #4b2f1e;
  margin-bottom: 12px;
}

.cart-contenido .cart_totals .order-total strong {
  color: #b5934b;
  font-size: 1.2rem;
}

/* ====== BOTÓN FINALIZAR COMPRA ====== */
.cart-contenido .checkout-button {
  background-color: #b5934b !important;
  color: #ffffff !important;
  padding: 14px 36px !important;
  border-radius: 50px !important;
  font-weight: 700 !important;
  font-size: 1.1rem !important;
  border: none !important;
  transition: 0.25s !important;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.cart-contenido .checkout-button:hover {
  background-color: #9c7d3e !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(181, 147, 75, 0.25);
}

/* ====== RESPONSIVE ====== */
@media (max-width: 768px) {
  .cart-titulo {
    font-size: 1.8rem;
  }

  .cart-contenido {
    padding: 16px;
  }

  .cart-contenido table.shop_table {
    font-size: 0.85rem;
  }

  .cart-contenido table.shop_table th,
  .cart-contenido table.shop_table td {
    padding: 10px 8px;
  }

  .cart-contenido .quantity input[type="number"] {
    width: 50px;
    padding: 6px 4px;
  }

  .cart-contenido button[name="update_cart"] {
    padding: 8px 16px;
    font-size: 0.85rem;
  }
}

@media (max-width: 480px) {
  .cart-contenido table.shop_table {
    font-size: 0.75rem;
  }

  .cart-contenido table.shop_table th,
  .cart-contenido table.shop_table td {
    padding: 6px 4px;
  }
}
</style>

<?php get_footer(); ?>