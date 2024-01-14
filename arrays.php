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
        box-sizing:border-box;
    }


   
    
    @keyframes effect1
    {
        from
        {
            transform:translateY(888px);
        }

        to
        {

            transform: translateY(0px);
        }
    }


    @keyframes effect2
    {
        from 
        {
            transform:translateX(-450px);
        }

        to 
        {
            transform:translateX(0px);
        }
    }

    .header
    {
        height:12%;
        background-color: blueviolet ;
        font-size: 44px;
        display:flex;
        justify-content: center;
        
    }

    h1
    {
            animation: effect2 1s ease-out none;
    }
   
    .content_pi
    {
        
       
        height:100vh;
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
    }

    .box1
    {
        animation: effect1 1s ease-in-out none;
        height:400px;
        width:400px;
        display:flex;
        justify-content: center;
        align-items: center;
    }

    .box2
    {
        
        width:100vw;
        height:100px;
    }


    </style>
    
</head>

<body>

<div class="container">
    <div class="header">
        <div class="header1">
            <h1>Array in php</h1>
        </div>
    </div>

    <div class="content_pi">

        <div class="box1">
            <form action="" method="POST" name="forma1" id="forma1">
            <label for="num"> add a number:</label>
            <input type="number" id="num" name="num">
            <input type="submit" name="set" value="send">
            </form>
        </div>

        <div class="box2">

        </div>
    </div>
    
</div>

<?php 

//if(isset($_post["set"]))
//{
    //$nums[]=$_POST["num"];
    //echo $nums[0];
//}

$ar=array(1,2,3);
for($i=0;$i<3;$i++)
{
    echo $ar[$i] ."\n";
}

for($i=0;$i<count($ar);$i++)
{
    echo "<br>" . $ar[$i] . "<br>";
}

$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "verano"=>"pera",
                                "meseta"=>"cardo"),
                "lacteos"=>array("animal"=>"vaca",
                                "queso"=>"leche"),
                "semillas"=>array("tipo1"=>"girasol",
                "tipo2"=>"pistaches"
));

//echo $alimentos["fruta"]["tropical"] . "<br>";

foreach($alimentos as $clave1=>$dim2)
{
    echo "$clave1 <br>";
    
        foreach($dim2 as $clave2=>$valor)
        {
            echo "$clave2:$valor <br>";
        }
}
?>

</body>
</html>