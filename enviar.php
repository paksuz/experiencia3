<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-12 01:23:21
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-10-28 01:41:38
 */

// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$directorio = 'C:/wamp/www/FormularioPHP/assets/';
$foto = isset($_FILES['foto']) ? $_FILES['foto'] : '';
if(!empty($foto)) {
  $extension = explode('.', $foto['name']);
  $nombre_foto = time() . '.' . $extension[1];
  $foto_subida = $directorio . basename($nombre_foto);
}

$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$contenido = isset($_POST['contenido']) ? (int) $_POST['contenido'] : 0;
$anio = isset($_POST['anio']) ? (int) $_POST['anio'] : 0;
$terminos = isset($_POST['terminos']) ? (int) $_POST['terminos'] : 0;
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$correo = isset($_POST['correo']) ? Filtro($_POST['correo']) : '';
$contrasena = isset($_POST['contrasena']) ? Filtro($_POST['contrasena']) : '';
$descripcion = isset($_POST['descripcion']) ? Filtro($_POST['descripcion']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$error = '';

// Mostrar contenido
if($enviado == 1 && $contenido == 1) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($nombre)) {
  $error = 'Por favor, ingrese su nombre.';
} else if(empty($correo)) {
  $error = 'Por favor, ingrese su correo electrónico.';
} else if(empty($contrasena)) {
  $error = 'Por favor, ingrese su contraseña.';
/*
 * Enviar imagenes por AJAX es más complicado,
 * Por lo que no será posible utilizar en esta versión
---------------------------------------------------------
} else if(empty($foto)) {
  $error = 'Por favor, seleccione su foto de perfil.';
---------------------------------------------------------
 */
} else if(empty($descripcion)) {
  $error = 'Por favor, ingrese su descripción.';
} else if(empty($anio)) {
  $error = 'Por favor, seleccione su año de ingreso.';
} else if(empty($sexo)) {
  $error = 'Por favor, ingrese su sexo.';
} else if(empty($terminos)) {
  $error = 'Debe aceptar los términos y condiciones para poder seguir.';
}

// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a onclick="Volver();" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>
<?php
// Vista de éxito
} else {
  if(!empty($foto)) {
    // Subir imagen
    move_uploaded_file($foto['tmp_name'], $foto_subida);
  }
?>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Bienvenido(a) <b><?php echo $nombre; ?></b>,</p>
      <p>Tu correo electrónico es <b><?php echo $correo; ?></b>, y tu contraseña tiene <b><?php echo strlen($contrasena); ?></b> caracteres.</p>
      <!-- p>
        Tu foto de perfil es: <br />
        <img src="./assets/<?php echo $nombre_foto; ?>" class="thumbnail">
      </p -->
      <p>
        Tu descripción es: <br />
        <blockquote>
          <?php echo $descripcion; ?>
        </blockquote>
      </p>
      <p>
        Tu año de ingreso es: <b><?php echo $anio; ?></b>
      </p>
      <p>
        Tu sexo es: <b><?php echo ($sexo == 'm' ? 'Masculino' : 'Femenino'); ?></b>
      </p>
      <p>
        Tu <b><?php echo ($terminos == 1 ? 'sí' : 'no'); ?></b> aceptaste los términos y condiciones.</b>
      </p>
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>
<?php } ?>