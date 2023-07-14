<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/metodo_get.css"> <!--Se cambió ruta de estilos-->
    <!--Se cambió el nombre-->
    <title>Metodo GET</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" title="Regresar al Inicio" src="img/home.png" alt="Boton Inicio">
    </a>
    <div class="main-frame-cal">
        <!--Se agrega Titulo-->
        <h1>Método GET</h1><br>
        <form action="" method="GET"><!--Se cambio el metodo POST a GET-->
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cédula</label>
                <!--Se cambia tipo text a number-->
                <input type="number" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
        </form>

        <?php

        $edad = 0;
        #Se cambio de metodo POST a GET
        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            echo "<h4>El Nombre Registrado es : " . $nombre . "<br></h4>";
            echo "<h4>El Apellido Registrado es: " . $apellido . "<br></h4>";
            echo "<h4>La Cédula Registrado es: " . $cedula . "<br></h4>";
        }
        ?>
    </div>
</body>

</html>