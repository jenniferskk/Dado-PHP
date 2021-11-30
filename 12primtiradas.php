<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //inlcuimos la clase
    include "dado.php";
    //declaración del array vacío
    $array1 = [];
    echo "El array está vacío.<br>";
    print_r($array1);
    echo "<br>"; //salto de línea

    for ($i = 0; $i <= 12; $i++) {
        // echo "<br>Vuelta " . $i . ": ";
        //Generación de objetos
        $dado1 = new Dado();

        //Uso get
        $minDado = $dado1->getminNumDado();
        $maxDado = $dado1->getmaxNumDado();

        $resultado = $dado1->tirarDado($minDado, $maxDado);
        // echo "<br>"; //salto de línea 

        array_push($array1, $resultado);

        //print_r($array1);
        //echo "<br>"; //salto de línea
    }
    echo "<br>"; //salto de línea
    echo "El array se ha rellenado<br>";
    print_r($array1);

    ?>
</body>

</html>
