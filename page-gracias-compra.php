<?php
/**
 * Template Name: Gracias por tu compra
 * Description: Página de agradecimiento después de finalizar una compra en WooCommerce.
 */

get_header(); ?>

<!-- ====== SECCIÓN DE GRACIAS POR COMPRA ====== -->
<section class="gracias-seccion gracias-compra">
  <div class="gracias-container">
    
    <!-- Ícono de compra exitosa -->
    <div class="gracias-icono">
      <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="45" stroke="#b5934b" stroke-width="6"/>
        <path d="M30 50 L45 65 L75 35" stroke="#b5934b" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>

    <h1 class="gracias-titulo">¡Gracias por tu compra!</h1>
    
    <p class="gracias-descripcion">
      Hemos recibido tu pedido correctamente. Pronto recibirás un correo con los detalles de tu compra y la información de seguimiento.
    </p>

    <!-- NÚMERO DE PEDIDO (dinámico si se puede) -->
    <?php if ( isset($_GET['order_id']) ) : ?>
      <div class="gracias-pedido">
        <span class="gracias-pedido-label">📍 Número de pedido:</span>
        <strong class="gracias-pedido-numero">#<?php echo esc_html($_GET['order_id']); ?></strong>
      </div>
    <?php endif; ?>

    <!-- DETALLES DE LA COMPRA -->
    <div class="gracias-detalles">
      <p><strong>✅ Confirmación:</strong> Te hemos enviado un correo con el resumen de tu compra.</p>
      <p><strong>📦 Envío:</strong> Procesaremos tu pedido en las próximas <strong>24 a 48 horas</strong>.</p>
      <p><strong>📞 Contacto:</strong> Si tienes dudas, escríbenos a <a href="mailto:cholitofeliztiendaonline@gmail.com" class="gracias-link">cholitofeliztiendaonline@gmail.com</a></p>
    </div>

    <!-- BOTONES DE ACCIÓN -->
    <div class="gracias-botones">
      <a href="<?php echo home_url('/'); ?>" class="gracias-btn">Volver al inicio</a>
      <a href="<?php echo home_url('/tienda'); ?>" class="gracias-btn gracias-btn-secundario">Seguir comprando</a>
    </div>

  </div>
</section>

<!-- ====== ESTILOS CSS ====== -->
<style>
/* ====== BASE ====== */
.gracias-seccion {
  padding: 80px 20px;
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fcf9f4;
}

.gracias-container {
  max-width: 720px;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  background-color: #ffffff;
  padding: 50px 40px;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(75, 47, 30, 0.08);
  border: 1px solid rgba(181, 147, 75, 0.15);
}

/* ====== ICONO ====== */
.gracias-icono {
  margin-bottom: 24px;
}

.gracias-icono svg {
  width: 80px;
  height: 80px;
}

/* ====== TEXTO ====== */
.gracias-titulo {
  font-size: 2.4rem;
  font-weight: 700;
  color: #4b2f1e;
  margin-bottom: 16px;
  line-height: 1.2;
}

.gracias-descripcion {
  font-size: 1.15rem;
  color: #5a3f2a;
  line-height: 1.7;
  margin-bottom: 28px;
}

/* ====== NÚMERO DE PEDIDO ====== */
.gracias-pedido {
  background-color: #fcf9f4;
  padding: 14px 20px;
  border-radius: 10px;
  margin-bottom: 28px;
  border-left: 4px solid #b5934b;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 6px;
  font-size: 1.1rem;
}

.gracias-pedido-label {
  color: #4b2f1e;
}

.gracias-pedido-numero {
  color: #b5934b;
  font-size: 1.2rem;
}

/* ====== DETALLES ====== */
.gracias-detalles {
  background-color: #fcf9f4;
  padding: 20px 24px;
  border-radius: 12px;
  text-align: left;
  margin-bottom: 32px;
  border-left: 4px solid #b5934b;
}

.gracias-detalles p {
  font-size: 1rem;
  color: #4b2f1e;
  margin-bottom: 8px;
  line-height: 1.6;
}

.gracias-detalles p:last-child {
  margin-bottom: 0;
}

.gracias-detalles strong {
  color: #4b2f1e;
}

.gracias-link {
  color: #b5934b;
  font-weight: 500;
  text-decoration: none;
}

.gracias-link:hover {
  text-decoration: underline;
}

/* ====== BOTONES ====== */
.gracias-botones {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  justify-content: center;
}

.gracias-btn {
  display: inline-block;
  padding: 14px 36px;
  background-color: #b5934b;
  color: #ffffff;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.25s ease;
  border: none;
  cursor: pointer;
}

.gracias-btn:hover {
  background-color: #9c7d3e;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(181, 147, 75, 0.3);
  color: #ffffff;
}

.gracias-btn-secundario {
  background-color: transparent;
  color: #4b2f1e;
  border: 2px solid #b5934b;
}

.gracias-btn-secundario:hover {
  background-color: #b5934b;
  color: #ffffff;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 600px) {
  .gracias-container {
    padding: 32px 20px;
  }

  .gracias-titulo {
    font-size: 1.8rem;
  }

  .gracias-descripcion {
    font-size: 1rem;
  }

  .gracias-pedido {
    flex-direction: column;
    gap: 2px;
  }

  .gracias-botones {
    flex-direction: column;
    align-items: center;
  }

  .gracias-btn {
    width: 100%;
    text-align: center;
  }
}
</style>

<?php get_footer(); ?>