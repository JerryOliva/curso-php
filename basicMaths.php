<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body
        {
            background-color: darkgoldenrod;
            height:100vh;
            width:100vw;
            display:flex;
            justify-content: center;
            align-items:center;
        }

        #bloque1
        {

            height:100px;
            display:flex;
            justify-content: center;
            text-align: center;
            margin-right:20px;


        }
        table
        {
            border-collapse:collapse;
            background-color: palegoldenrod;
        }
    </style>
</head>
<body>
        <div id="bloque1">
            <h1> CALCULADOR </h1>
        </div>
        
        <form action="Math.php"method="POST" id="forma">
        <div>
                <div>
                    <label for="v1">ingrese un valor entero</label>
                    <input type="number" id="v1" name="v1">
                </div>
                <div>
                    <label for="v2">ingrese un valor entero</label>
                    <input type="number" id="v2" name="v2">
                </div>

                <div>
                    <select name="operandos" id="operandos">
                        <option>Sumar</option>
                        <option >Restar</option>
                        <option>Multiplicar</option>
                        <option>Dividir</option>
                        <option>incremento</option>
                        <option> decremento </option>
                    </select>
                </div>

                <div>
                    <input type="submit" id="enviar" name="enviar" value="Enviar">
                </div>
            </div>

        </form>
            

<?php

      
   if(isset($_POST["enviar"]))
   {
        $num=$_POST['v1'];
        $num2=$_POST['v2'];
        $operaciones=$_POST['operandos'];

        if(!strcmp("Sumar",$operaciones))
        {
            echo " La suma es:". ($num+$num2);
        }
    

        if(!strcmp("Restar",$operaciones))
        {
            echo " La resta es:". ($num-$num2);
        }
       

        if(!strcmp("Multiplicar",$operaciones))
        {
            echo " La multiplicación es:". ($num*$num2);
        }


        if(!strcmp("Dividir",$operaciones))
        {
            echo " La división es:". ($num/$num2);
        }
        else 
        {
            echo "Acaso funciona esta mierda?";
        }
        
   }

       
?>
</body>
</html>