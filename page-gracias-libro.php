<?php
/**
 * Template Name: Página de Gracias
 * Description: Página de confirmación después de enviar un formulario.
 */

get_header(); ?>

<!-- ====== SECCIÓN PRINCIPAL ====== -->
<section class="gracias-seccion">
  <div class="gracias-container">
    <div class="gracias-icono">
      <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="45" stroke="#b5934b" stroke-width="6"/>
        <path d="M30 50 L45 65 L75 35" stroke="#b5934b" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>

    <h1 class="gracias-titulo">¡Gracias por tu mensaje!</h1>
    
    <p class="gracias-descripcion">
      Hemos recibido tu mensaje correctamente. Nuestro equipo lo revisará y te responderá a la brevedad posible.
    </p>
    
    <div class="gracias-detalles">
      <p><strong>✅ Correo de confirmación:</strong> Te hemos enviado un correo con los detalles de tu reclamo.</p>
      <p><strong>⏱️ Tiempo de respuesta:</strong> Nos pondremos en contacto contigo en las próximas <strong>24 a 48 horas</strong>.</p>
    </div>

    <div class="gracias-botones">
      <a href="<?php echo home_url('/'); ?>" class="gracias-btn">Volver al inicio</a>
      <a href="<?php echo home_url('/tienda'); ?>" class="gracias-btn gracias-btn-secundario">Seguir comprando</a>
    </div>
  </div>
</section>

<!-- ====== CSS PERSONALIZADO ====== -->
<style>
/* Reset básico para la sección */
.gracias-seccion {
  padding: 80px 20px;
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fcf9f4; /* crema clarísimo */
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

/* Ícono de check */
.gracias-icono {
  margin-bottom: 24px;
}

.gracias-icono svg {
  width: 80px;
  height: 80px;
}

/* Títulos */
.gracias-titulo {
  font-size: 2.4rem;
  font-weight: 700;
  color: #4b2f1e; /* marrón oscuro */
  margin-bottom: 16px;
  line-height: 1.2;
}

.gracias-descripcion {
  font-size: 1.15rem;
  color: #5a3f2a;
  line-height: 1.7;
  margin-bottom: 28px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

/* Detalles extra */
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

/* Botones */
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