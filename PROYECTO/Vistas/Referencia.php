<?php
require_once('../Modelos/Referencia.php');
$model=new Referencia();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nombre Autor">
    <meta name="description" content="página web de un formulario de inicio de sesión  y registro ">
    <meta name="keywords" content="registro Usuario ,formulario de registro ,crear cuenta , registro en linea">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title>Formulario Registro Producto</title>
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto" class="text-center">
    <form action="../Controladores/AgregarReferencia.php" method="POST" enctype="multipart/form-data">
        <img class="mb-4" src="img/logo.png" alt="SANTYFASHION" width=200>
        <h4 class="text-secondary">SantyFashion</h4>
        <h1 class="h5 mb-3 fw-normal">Registro Referencia</h1>
        <div class="form-floating">
            <input type="number" class="form-control" id="fLoatingidReferencia" name="idReferencia"
                   placeholder="Ingrese el Id" required="true" autofocus
                   pattern="[0-9]{1, 20}">
            <label for="fLoatingidReferencia">Id de la Referencia: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingnombre" name="nombre"
                   placeholder="Ingrese el Nombre" required="true" pattern="[A-Za-z]{1, 20}">
            <label for="floatingnombre">Nombre: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingdescripcion" name="descripcion"
                   placeholder="Ingrese la Descripcion" required="true" pattern="[A-Za-z]{1, 50}">
            <label for="floatingdescripcion">Descripcion: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingreferencia" name="referencia"
                   placeholder="Ingrese la Referencia" required="true" pattern="[A-Za-z]{1, 50}">
            <label for="floatingreferencia">Referencia: </label>
        </div>
        <div class="form-floating">
            <input type="file" class="form-control" id="floatingimagen" name="imagen"
                   placeholder="Cargue una imagen" required="true">
            <label for="floatingimagen">Foto :</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="enviar" type="submit" onclick="validar()" >Enviar</button>
        <button class="w-100 btn btn-lg btn-primary" name="borrar" type="reset" >Borrar</button>
        <p class="mt-3 mb-3 text-muted">Todos los Derechos Reservados SANTYFASHION ©</p>
    </form>
</main>
<script src="/Vistas/js/JavaScript.js"></script>
</body>
</html>