// Etiqueta flotante de Curso
const cursoSelect = document.getElementById('curso');
cursoSelect.addEventListener('change', () => {
  cursoSelect.classList.toggle('filled', !!cursoSelect.value);
});

// Etiqueta flotante de Juego y lógica para mostrar/ocultar el campo COD
const juegoSelect = document.getElementById('juego');
const codBox = document.getElementById('codmobile-box');
const codInput = document.getElementById('codmobile-input');

juegoSelect.addEventListener('change', () => {
  juegoSelect.classList.toggle('filled', !!juegoSelect.value);

  if (juegoSelect.value === 'brawlstars') {
    codBox.style.display = 'block';
    codInput.setAttribute('required', true);
  } else {
    codBox.style.display = 'none';
    codInput.removeAttribute('required');
    codInput.value = '';
  }
});

// Validación del formulario con mensaje de éxito
const formulario = document.getElementById('formulario');
formulario.addEventListener('submit', function (e) {
  const checkbox = document.getElementById('acepto');
  if (!checkbox.checked) {
    e.preventDefault();
    alert('Debes aceptar los Términos y Condiciones antes de enviar el formulario.');
    return;
  }

  e.preventDefault(); // Evita el envío real
  alert('¡Inscripción completada exitosamente!');
  formulario.reset();

  // Quita clases visuales
  cursoSelect.classList.remove('filled');
  juegoSelect.classList.remove('filled');
  codBox.style.display = 'none';
});