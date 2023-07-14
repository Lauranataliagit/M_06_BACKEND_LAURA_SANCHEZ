<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mayor_menor.css"> <!--Se cambia nombre de hoja de estilos-->
    <title>Mayor Menor</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" title="Regresar al Inicio" src="img/home.png" alt="Boton Inicio">
    </a>
    <div class="main-frame-cal">
        <h1>¿Eres Menor o Mayor?</h1><br>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Edad</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
        </form>

        <?php

        $edad = 0;

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];
            # Se corrigen todos los resultados
            if ($edad >= 18) {
                echo "<h2> Su edad es de $edad años, es mayor de edad. </h2>";
            } else if (18 > $edad && 0 < $edad) {
                echo "<h2>Su edad es de $edad años, no es mayor de edad. </h2>";
            } else {
                echo "<h2>No valido</h2>";
            }
        }

        ?>

    </div>
</body>

</html>