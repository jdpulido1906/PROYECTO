<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nombre Autor">
    <meta name="description" content="página web de un formulario de inicio de sesión y registro">
    <meta name="keywords" content="registro Usuario, formulario de registro, crear cuenta, registro en línea">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Registro Prenda</title>
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<main class="form-signin">
    <form action="../Controladores/AgregarPrenda.php" method="POST" enctype="multipart/form-data">
     <img class="mb-4" src="img/logo.png" alt="SANTYFASHION" width="200">
        <h4 class="text-secondary">SantyFashion</h4>
        <h1 class="h5 mb-3 fw-normal">Registro Prenda</h1>
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingIdPrenda" name="idPrenda"
                   placeholder="Ingrese el Id" required autofocus pattern="[0-9]{1,20}">
            <label for="floatingIdPrenda">Id de la Prenda:</label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingIdReferencia" name="idReferencia"
                   placeholder="Ingrese el Id de la Referencia" required pattern="[0-9]{1,20}">
            <label for="floatingIdReferencia">Id de la Referencia:</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingTalla" name="talla"
                   placeholder="Ingrese la Talla" required pattern="[A-Za-z0-9]{1,10}">
            <label for="floatingTalla">Talla:</label>
        </div>
        <div class="form-floating">
            <input type="date" class="form-control" id="floatingFecha" name="fecha"
                   placeholder="Ingrese la Fecha" required>
            <label for="floatingFecha">Fecha:</label>
        </div>
        <div class="form-floating">
    <select class="form-control" id="floatingEstado" name="estado" required>
        <option value="" selected disabled>Seleccione el Estado</option>
        <option value="reservado">Reservado</option>
        <option value="disponible">Disponible</option>
        <option value="vendido">Vendido</option>
    </select>
    <label for="floatingEstado">Estado:</label>
</div>

        <div class="form-floating">
            <input type="number" class="form-control" id="floatingPrecio" name="precio"
                   placeholder="Ingrese el Precio" required pattern="[0-9]{1,50}">
            <label for="floatingPrecio">Precio:</label>
        </div>
        <div class="color-picker">
            <label for="floatingColor">Color:</label>
            <input type="color" class="form-control form-control-color" id="floatingColor" name="color"
                   placeholder="Seleccione el Color" required>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="enviar" type="submit">Enviar</button>
        <button class="w-100 btn btn-lg btn-secondary" name="borrar" type="reset">Borrar</button>
        <p class="mt-3 mb-3 text-muted">Todos los Derechos Reservados SANTYFASHION ©</p>
    </form>
</main>
<script src="js/JavaScript.js"></script>
</body>
</html>
