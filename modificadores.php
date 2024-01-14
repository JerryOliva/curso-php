<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>

    <style>

        body
        {
            padding: 0;
            margin:0;
            box-sizing:border-box;
        }

        .container_principal
        {
            height:100vh;
            width:100vw;
            background-color:#ff5440;
        }

        .header
        {
            height:12%;
            display: flex;
            justify-content: center;
            color:whitesmoke;
        }
  


    </style>
</head>
<body>

<div class="container_principal">

<div class="header">
<div class="header_1">   
    <h1> List with Classes php</h1></div>
</div>


</div>

    
<?php

include ("objet.php");

$peer1= new male("Ramon","veterinary","Milagro 12, 230", 553203932);
$peer2 = new fem ("Angie","Architect","Ocesje 20", 323939);

echo $peer1->getNom() . "<br>";
echo $peer1->getOcup() . "<br>";
echo $peer1->getDir() . "<br>";
echo $peer1->getPho() . "<br>";

echo "<br>";

echo $peer2->getNom() . "<br>";
echo $peer2->getOcup() . "<br>";
echo $peer2->getDir() . "<br>";
echo $peer2->getPho() . "<br>";

?>
</body>
</html>