<style>

    

    #validar
    {
        height:200px;
        display: flex;
        text-align: center;
        font-size: 50px;
        font: sans-serif;
        font-weight: 600;
        color:green;
        
    }

    #invalidar
    {
        height:200px;
        display: flex;
        text-align: center;
        font-size: 50px;
        font: sans-serif;
        font-weight: 600;
        color:yellow;
        
    }
</style>


<?php

if(!isset($_POST["enviar"]))
{
    
    $user1= $_POST["nombre"];
    $edad= $_POST["edad"];

    if($user1=="Rene" && $edad>=18)
    {
        echo " <p id='validar'>Acceso Autorizado</p>";
    }
    else 
    {
        echo "<p id='invalidar'>Acceso denegado</p>";
    }

    if($user1!="Ra" and $user1!="clau")
    {
        echo "<p id=validar> una de las dos opciones es verdadera";
    }
    else 
    {
        echo "<p id=invalidar> ninguna de las dos opciones es verdadera";
    }

    if($user1=="Kennedy" || $user1=="Ismael")
    {
        echo "<p id=validar> Una de las dos opciones es verdadera";
    }
    else 
    {
        echo "<p id=invalidar> ninguna opción es verdadera";

    }
}

?>