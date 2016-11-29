<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-12 00:29:40
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-10-28 01:16:53
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Proyecto para enseñar el funcionamiento de un formulario en PHP">
  <meta name="keywords" content="html, bootstrap, php, formulario, desarrollo, web">
  <meta name="author" content="Miguel González Aravena">
  <title>Formulario en PHP</title>
  <!-- Dependencias CSS -->
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h1>Formulario en PHP</h1>
  <!-- Mensaje de respuesta -->
  <div id="mensaje" style="display: none"></div>
  <!-- Formulario -->
  <form id="formulario">
    <!-- Hidden -->
    <input type="hidden" name="enviado" value="1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Formulario</h3>
      </div>
      <div class="panel-body">
        <!-- Texto -->
        <div class="form-group">
          <b>Nombre</b>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <!-- Email -->
        <div class="form-group">
          <b>Correo electrónico</b>
          <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo electrónico">
        </div>
        <!-- Password -->
        <div class="form-group">
          <b>Contraseña</b>
          <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
        </div>
        <!-- File -->
        <div class="form-group">
          <b>Foto de perfil</b>
          <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <b>Descripción</b><br />
          <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese una descripción"></textarea>
        </div>
        <!-- Select -->
        <div class="form-group">
          <b>Año de ingreso</b><br />
          <select name="anio" id="anio" class="form-control">
            <option value="">Seleccione un año</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
          </select>
        </div>
        <!-- Radio -->
        <div class="form-group">
          <b>Sexo</b><br />
          <input type="radio" name="sexo" id="sexo" value="m"> Masculino<br />
          <input type="radio" name="sexo" id="sexo" value="f"> Femenino<br />
        </div>
        <!-- Checkbox -->
        <div class="form-group">
          <b>Términos y condiciones</b><br />
          <input type="checkbox" name="terminos" id="terminos" value="1"> Acepto y he leído los términos y condiciones.<br />
        </div>
        <div class="form-group">
          <input type="checkbox" name="contenido" id="contenido" value="1"> <b>¿Ver la estructura del contenido que se envió?</b>
        </div>
      </div>
      <div class="panel-footer">
        <div class="text-right">
          <a href="./" class="btn btn-primary">
            <i class="glyphicon glyphicon-repeat"></i>
            Reiniciar
          </a>
          <!-- Button submit -->
          <button type="submit" class="btn btn-success">
            Enviar
            <i class="glyphicon glyphicon-menu-right"></i>
          </button>
        </div>
      </div>
    </div>
  </form>
  <!-- Pie de página -->
  <footer>
    <div class="text-center">
      <i class="glyphicon glyphicon-leaf"></i>
      Desarrollado por <a href="https://github.com/MiguelGonzalezAravena" target="_blank">Miguel González Aravena</a>
    </div>
  </footer>
</div>
<!-- Dependencias JS -->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/codes.js"></script>
</body>
</html>