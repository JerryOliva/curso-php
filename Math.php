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
        
        if(!strcmp("incremento",$operaciones))
        {
            echo " El incremento solo se realiza en una sola variable";
        }

        if(!strcmp("decremento",$operaciones))
        {
            echo " El decremento solo se realiza en una sola variable";
        }
   }

       
?>