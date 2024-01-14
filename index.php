<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
    <style>
        *
        {
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        .container_principal
        {

            height:100vh;
            display: flex;
            align-items:center;
        }

        .box_pri
        {
            height:400px;
            width:100vw;
            background-color:aqua ;
        }
    </style>
</head>
<body>

    <div class="container_principal">
        <div class="box_pri">
            <div class="box_1"></div>
            <div class="div"></div>
            <div class="div"></div>
        </div>
        
    </div>

    <?php

    include ("autos.php");

    //auto::discount();

    $c1=new auto("jeep");
    //auto::$subvencion=10000;
    $c1->compra($c1->gama);
    echo $c1->getTotal() . "<br>";
    $c1->calefac();
    echo $c1->getTotal() . "<br>";
    $c1->colorCuero("azul");
    echo $c1->getTotal() . "<br>";

    

    ?>
    
    
</body>
</html>