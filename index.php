<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "formularioTICS";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción Mini Torneo Brawl Stars</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Inscripción Mini Torneo Brawl Stars</h1>
        <form action="index.php" name="formulariosTICS" method="post" >

            <label for="nombre">Nombre del Participante</label>
                <input type="text" name="nombre" placeholder="Nombre y Apellido" required>

            <label for="curso">Curso:</label>
            <select name="curso" id="curso">
                <option value="3°B">3°B</option>
                <option value="3°D">3°D</option>
                <option value="4°B">4°B</option>
                <option value="4°D">4°D</option>
            </select>

            <label for="email">Correo Institucional</label>
                <input type="email" name="email" placeholder="n.ap1ap2@intecorecoleta.cl" required>

            <label for="tag">Tag Brawl Stars</label>
                <input type="text" name="tag" placeholder="#ABC123" required>

            <button type="submit" name="inscribirse">Inscribirse</button>
            <button type="reset">Limpiar</button>
        </form>
        <p id="mensaje"></p>
    </div>
    <script src="script.js"></script> -->



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="login-box">
    <p>Formulario juegos</p>
    <form id="formulario">

      <!-- Nombre -->
      <div class="user-box">
        <input required name="nombre" type="text">
        <label>Nombre y Apellido</label>
      </div>

      <!-- Curso -->
      <div class="user-box">
        <select required name="curso" id="curso">
            <option value="" disabled selected></option>
            <option value="3D">3D</option>
            <option value="3B">3B</option>
            <option value="4D">4D</option>
            <option value="4B">4B</option>
        </select>
        <label>Curso</label>
      </div>

      <!-- Usuario Brawl Stars -->
      <div class="user-box">
        <input required name="brawlstars" type="text">
        <label>Tag o usuario de Brawl Stars</label>
      </div>

      <!-- Usuario COD Mobile -->
      <div class="user-box">
        <input required name="codmobile" type="text">
        <label>Tag o usuario de COD Mobile</label>
      </div>

      <!-- Términos y condiciones -->
      <div class="terms-container">
        <label class="container">
          <input type="checkbox" required id="acepto">
          <span class="checkmark"></span>
        </label>
        <span class="terms-text">
          <a href="#" onclick="document.getElementById('modal').style.display='block'">TÉRMINOS Y CONDICIONES</a>
        </span>
      </div>
      
      <!-- Botón -->
      <button type="submit" class="boton-animado">
        <span></span><span></span><span></span><span></span>
        Enviar
      </button>
    </form>
  </div>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('modal').style.display='none'">&times;</span>
      <h2>Términos y Condiciones</h2>
      <p>Aquí van las reglas del formulario, normas de conducta, condiciones de participación, etc.</p>
    </div>
  </div>

  <script>
    // Mueve la etiqueta del select si hay valor
    const cursoSelect = document.getElementById('curso');
    cursoSelect.addEventListener('change', function () {
      if (cursoSelect.value) {
        cursoSelect.classList.add('filled');
      } else {
        cursoSelect.classList.remove('filled');
      }
    });

    // Validación del formulario
    const formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function (e) {
      const checkbox = document.getElementById('acepto');
      if (!checkbox.checked) {
        e.preventDefault();
        alert('Debes aceptar los Términos y Condiciones antes de enviar el formulario.');
      }
    });
  </script>

</body>
</html>

</body>
</html>




<?php

    if(isset($_POST['inscribirse'])) {

        $nombre = $_POST ['nombre'];
        $curso = $_POST ['curso'];
        $email = $_POST ['email'];
        $tag = $_POST ['tag'];

        $insertarDatos = "INSERT INTO inscripcion VALUES('$nombre', '$curso', '$email', '$tag', '')";

        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

    }

?>
