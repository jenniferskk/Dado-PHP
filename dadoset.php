<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>Dado Setters</title>
</head>

<body>

    <?php
    //inlcuimos la clase
    include "dado.php";

    //Generación de objetos
    $dado1 = new Dado();

    //Uso get
    $minDado = $dado1->getminNumDado();
    echo "<br>La tirada minima del dado es:" . $minDado;

    $maxDado = $dado1->getmaxNumDado();
    echo "<br>La tirada maxima del dado es:" . $maxDado;

    echo "<br>"; //salto de línea 
    $resultado = $dado1->tirarDado($minDado, $maxDado);
    echo "<br>Resultado:" . $resultado;
    ?>
</body>

</html>
