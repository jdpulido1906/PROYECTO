<?php
require_once('../Modelos/Productos.php');
$model=new Productos();
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
    <form action="../Controladores/AgregarProducto.php" method="POST" enctype="multipart/form-data">
        <img class="mb-4" src="img/logo.png" alt="SANTYFASHION" width=200>
        <h4 class="text-secondary">SantyFashion</h4>
        <h1 class="h5 mb-3 fw-normal">Registro Producto</h1>
        <div class="form-floating">
            <input type="number" class="form-control" id="fLoatingidproducto" name="idproducto"
                   placeholder="Ingrese el Id" required="true" autofocus
                   pattern="[0-9]{1, 20}">
            <label for="fLoatingidproducto">Id del Producto: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingnombre" name="nombreproducto"
                   placeholder="Ingrese el Nombre" required="true" pattern="[A-Za-z]{1, 20}">
            <label for="floatingnombre">Nombre: </label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingprecio" name="precioproducto"
                   placeholder="Ingrese el Precio" required="true" pattern="[0-9]{8, 20}">
            <Label for="floatingprecio">Precio: </label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingtalla" name="tallaproducto"
                   placeholder="Ingrese la Talla" required="true" pattern="[A-Za-z0-9]{1,10}">
            <label for="floatingtalla">Talla :</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingdiseno" name="disenoproducto"
                   placeholder="Ingrese el Diseño" required="true" pattern="[A-Za-z]{1,50}">
            <label for="floatingdiseno">Diseño :</label>
        </div>
        <div class="form-floating">
            <input type="file" class="form-control" id="floatingimagen" name="imagenproducto"
                   placeholder="Cargue una imagen" required="true">
            <label for="floatingimagen">Foto :</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="enviar" type="submit" onclick="validar()" >Enviar</button>
        <button class="w-100 btn btn-lg btn-primary" name="borrar" type="reset" >Borrar</button>
        <p class="mt-3 mb-3 text-muted">Todos los Derechos Reservados SANTYFASHION ©</p>
    </form>
</main>
<script src="js/JavaScript.js"></script>
</body>
</html>