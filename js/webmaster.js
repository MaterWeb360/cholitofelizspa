$('.slider_productos').on('mouseenter', function() {
    $(this).find('.w-slider-arrow-left').trigger('click');
});


document.addEventListener('DOMContentLoaded', function () {

    const sliders = document.querySelectorAll('.w-slider');

    sliders.forEach(slider => {

        slider.addEventListener('mouseenter', function () {
            const autoplayButton = slider.querySelector('.w-slider-nav');
            if (slider.__wf_slider && slider.__wf_slider.timer) {
                clearTimeout(slider.__wf_slider.timer);
            }
        });

    });

});

//libroi de reclamaciones
document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("libro_form");
    const submitBtn = form.querySelector('input[type="submit"]');

    const requiredFields = [
        form.querySelector('[name="nombre"]'),
        form.querySelector('[name="documento"]'),
        form.querySelector('[name="telefono"]'),
        form.querySelector('[name="correo"]'),
        form.querySelector('[name="bien_tipo"]'),
        form.querySelector('[name="producto_servicio"]'),
        form.querySelector('[name="descripcion_bien"]'),
        form.querySelector('[name="tipo_reclamo"]'),
        form.querySelector('[name="detalle"]'),
        form.querySelector('[name="pedido"]')
    ];

    const checkbox = form.querySelector('input[type="checkbox"]');

    submitBtn.disabled = true;

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function validateField(field) {

        let valid = field.value.trim() !== "";

        if (field.name === "correo") {
            valid = validateEmail(field.value.trim());
        }

        if (field.name === "documento") {
            valid = field.value.trim().length >= 8;
        }

        if (field.name === "telefono") {
            valid = field.value.trim().length >= 7;
        }

        field.classList.remove("is-valid", "is-invalid");

        if (field.value.trim() !== "") {
            field.classList.add(valid ? "is-valid" : "is-invalid");
        }

        return valid;
    }

    function validateForm() {

        let isValid = true;

        requiredFields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if (!checkbox.checked) {
            isValid = false;
        }

        submitBtn.disabled = !isValid;
    }

    requiredFields.forEach(field => {

        field.addEventListener("input", validateForm);
        field.addEventListener("change", validateForm);

    });

    checkbox.addEventListener("change", validateForm);

    validateForm();

});

//lupa producto
document.addEventListener('DOMContentLoaded', () => {

    const container = document.querySelector('.producto-single_imagen');

    if(!container) return;

    const img = container.querySelector('img');
    const lens = container.querySelector('.zoom-lens');

    if(!img || !lens) return;

    const zoom = 2;

    container.addEventListener('mouseenter', () => {

        lens.style.opacity = '1';

        lens.style.backgroundImage = `url(${img.src})`;

        lens.style.backgroundSize =
            `${img.offsetWidth * zoom}px ${img.offsetHeight * zoom}px`;

    });

    container.addEventListener('mouseleave', () => {

        lens.style.opacity = '0';

    });

    container.addEventListener('mousemove', (e) => {

        const rect = container.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const lensSize = lens.offsetWidth;

        let lensX = x - lensSize / 2;
        let lensY = y - lensSize / 2;

        lens.style.left = lensX + 'px';
        lens.style.top = lensY + 'px';

        const bgX = -(x * zoom - lensSize / 2);
        const bgY = -(y * zoom - lensSize / 2);

        lens.style.backgroundPosition = `${bgX}px ${bgY}px`;

    });

});