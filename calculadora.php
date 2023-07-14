<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" title="Regresar al Inicio" src="img/home.png" alt="Boton Inicio">
    </a>
    <div class="main-frame-cal">
        <!--Se agrega Titulo-->
        <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <div class="form-group"><br>
            <label for="exampleFormControlInput1">Número 1:</label>
           <!--Se agrega la propiedad name-->
            <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Digite Número 1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Número 2:</label>
            <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Digite Número 2"> <!--Se corrige la leta "n" por "N"-->
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione la operación:</label>
            <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                <!--Se cambia el termino de valores-->
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicación">Multiplicación</option>
            <option value="división">División</option>
            </select>
        </div>
        <button type="submit" value="operar" name="operar" class="btn btn-outline-info">Resultado</button>
    </form>

    <?php

    $n1 =  $n2 = $tipo = $result = 0;
    # Se agrega verificación por el boton operear
    if (isset($_POST['operar'])) {
 # se agrega fragmento de codigo para convertir de cadena de caracteres a numeros enteros
        $n1 = $_POST['n1'] ? intval($_POST['n1']) : 0;
        $n2 = $_POST['n2'] ? intval($_POST['n2']) : 0;
        $tipo = $_POST['tipo'];
       
        switch ($tipo) {
            case 'suma':
                $result = $n1 + $n2;
                break;
            case 'resta':
                $result = $n1 - $n2;
                break;
            case 'multiplicación':
                $result = $n1 * $n2;
                break;
            case 'división':
                $result = $n1 / $n2;
                break;
        }
# Se agrega mas contenido a string
        echo "<h1>El Resultado de la Operación $tipo es: ".$result."</h1>";
        #echo "<script>alert(".$result.");</script>";

    }

    ?>

</body>
</html>