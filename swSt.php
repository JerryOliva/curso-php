<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back end</title>

    <style>
        .container
        {
            top:0;
            left:0;
            box-sizing: border-box;
            height:100vh;
            display:flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(23,239,35);
        }

        @keyframes leftSlide
        {
            from{
                transform:translateX(-400px);
            }
            to
            {
                transform:translateX(0);
            }
        }

        .login_cont
        {
            animation: leftSlide 1s ease-out ;
            height:300px;
            width:300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(23,239,35);
        }
        
        .login_cont:hover
        {
            background-color: tomato;
            transition:0.8s;
        }

        .login1,.login2
        {
            width:200px;
            margin:10px;
         
            
        }

        .login3
        {

            width:150px;
            margin:10px;
            display: flex;
            justify-content: flex-end;

        }

    </style>

    
</head>
<body>

    <form id="forma" method="POST" name="forma">

        <div class="container">
        
        <div class="login_cont">
        <div class="login1">
            <label for="names">Insert a name:</label>
            <input type="text" id="names" name="names">
        </div>
        <div class="login2">
            <label for="passw">Insert a password:</label>
            <input type="password" id="passw" name="passw">

            <div class="login3">
                <input type="submit" name="send" value="Send" >
            </div>
        </div>
        </div>
       

        </div>
    </form>  
  <?php

    if(isset($_POST["send"]))
    {
        $nombre=$_POST["names"];
        $contrasena=$_POST["passw"];

        switch (true)
        {
            case $nombre=="juan" && $contrasena=="1234":
                echo "Elevado";
                break;
            case $nombre=="Mariano" && $contrasena=="abce":
                echo "Elevado";
                break;
            case $nombre=="Ismael" && $contrasena=="203":
                echo "Continua";
                break;
            default:
            echo "La consciencia es tu regalo toda la energía que percibes es del mundo que te rodea, respira para elevarte de esos planos de baja frecuencia"; 

        }
    }
  ?>

</body>
</html>