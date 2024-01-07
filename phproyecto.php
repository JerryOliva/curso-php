<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body
        {
            width:100vw;
            height:100vh;
            display:flex;
            justify-content: center;
            align-items:center;
        }

        table
        {
            background-color:tomato;
            width:300px;
            height:200px;
            display:flex;
            justify-content:center;
            align-items: center;
           
        }

        #boton1
        {
            display:flex;
            justify-content: flex-end;
            align-items:center;
        
        }

    </style>

    
</head>
<body>

    <form action="validarUsuario.php" id="datos" method="POST" name="datos" >

    <table>

    <tr>
    <td>Submit</td>
    </tr>
            <tr>
                
                <td>
                    Nombre:
                </td>
                <td>
                    <label for="nombre"></label>
                    <input type="text" id="nombre" name="nombre">
                </td>
            </tr>
            <tr>
               
            <td>
                Edad:
            </td>

            <td>
                <label for="edad"></label>
                <input type="text" id="edad" name="edad">
            </td> 
            
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>

           <tr>
           <td>
                <input type="submit" id="enviar" name ="enviar" value="Enviar">
            </td>
           </tr>
            

    </table>


    </form>



</body>
</html>