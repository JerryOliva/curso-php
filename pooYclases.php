<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

 <?php

    class persona
    {
        public function __construct(

            public string $nombre,
            public int $edad,
            public string $genero,
            public string $nacionalidad
            
        ){}
    
        //Set value methods
     public function setNombre($nombre)
     {
        $this->nombre = $nombre;
     }

     public function setEdad($edad)
     {
        $this->edad=$edad;
     }

     public function setGenero($genero)
     {
        $this->genero = $genero;
     }

     public function setNacionalidad($nacionalidad)
     {
        $this->nacionalidad=$nacionalidad;
     }

     //get value methods

     public function getNom()
     {
        return $this->nombre;
     }

     public function getEdad()
     {
        return $this->edad;
     }

     public function getGenero()
     {
        return $this->genero;
     }

     public function getNaci()
     {
        return $this->nacionalidad;
     }


    }

    class niñes extends persona
    {

        function ni()
        {
            $this->nombre;
            $this->edad;
            $this->genero;
            $this->nacionalidad;
        }
        

        
    }

    // create construct persona
    $persona1= new persona("Ismael",23,"m","mexique");
    $persona2=new niñes("joaquina",10,"f","mexique");

    //print value from persona1

    echo $persona1->getNom() . "<br>";
    echo $persona1->getEdad() . "<br>";
    echo $persona1->getGenero() . "<br>";
    echo $persona1->getNaci() . "<br>";

    echo $persona2->getNom() . "<br>";
    echo $persona2->getEdad() . "<br>";
    echo $persona2->getGenero() . "<br>";
    echo $persona2->getNaci() . "<br>";



    
 ?>   
</body>
</html>