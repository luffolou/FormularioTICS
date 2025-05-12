<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "formularioTICS";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="login-box">
    <p>Formulario juegos</p>
    <form action="index.php" id="formulario" name="formularioTICS" method="post">

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

      <!-- Usuario correo institucional -->
    <div class="user-box">
      <label for="correo" class="label-fijo">Correo electrónico</label>
      <input required type="email" name="email" id="correo">
    </div>

    
      <!-- Campo JUEGO (corregido el ide) -->
    <div class="user-box">  
        <select required name="juego" id="juego">
            <option value="" disabled selected></option>
            <option value="fifa">FIFA</option>
            <option value="cs">Counter Strike 1.6</option>
            <option value="brawlstars">Brawl Stars</option>
        </select>
        <label>Juego</label>
      </div>

      <div class="user-box" id="codmobile-box">
        <input required name="tag" type="text" id="codmobile-input">
        <label>Tag o usuario de brawlstars</label>
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
      <button type="submit" class="boton-animado" name="inscribirse">
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

  <script src="script.js"></script>

</body>
</html>





<?php

    if(isset($_POST['inscribirse'])) {

        $nombre = $_POST ['nombre'];
        $curso = $_POST ['curso'];
        $email = $_POST ['email'];
        $juego = $_POST ['juego'];
        $tag = $_POST ['tag'];
        

        $insertarDatos = "INSERT INTO inscripcion VALUES('$nombre', '$curso', '$email','$juego', '$tag', '')";

        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

    }

?>
