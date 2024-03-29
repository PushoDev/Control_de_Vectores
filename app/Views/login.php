<!-- 
* Copyright 2023 Luis A. Guisado "Pusho.Dev"
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icono del Inventario -->
    <link rel="shortcut icon" href="<?php echo base_url('/favicon.ico'); ?>" type="image/x-icon">
    <!-- <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" /> -->
    <!-- CSS & JS -->
    <link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/js/sweet-alert.min.js') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/sweet-alert.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/material-design-iconic-font.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/jquery.mCustomScrollbar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/style.css') ?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/js/modernizr.js') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/js/bootstrap.min.js') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/js/jquery.mCustomScrollbar.concat.min.js') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/js/main.js') ?>">
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script>window.jQuery || document.write('<script src="/public/js/jquery-1.11.2.min.js"><\/script>')</script>
    

    
</head>
<body class="full-cover-background" style="background-image:url(<?php echo base_url('/assets/img/font-login.jpg') ?>);">
    <div class="form-container">
      <p class="text-center" style="margin-top: 17px;">
        <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
      </p>
      <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>


      <!-- FORMULARIO DEL LOGIN -->
      <form action="<?= site_url('home/login') ?>" method="post" autocomplete="off">

        <div class="group-material-login">
          <input type="text" class="material-login-control" required="" maxlength="70" name="usuario" id="username">
          <span class="highlight-login"></span>
          <span class="bar-login"></span>
          <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre de Usuario</label>
        </div>
          
        <br>
          
        <div class="group-material-login">
          <input type="password" class="material-login-control" required="" maxlength="70" name="password" id="password">
          <span class="highlight-login"></span>
          <span class="bar-login"></span>
          <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
        </div>

        <br>

        <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>

      </form>

    </div>
</body>
</html>