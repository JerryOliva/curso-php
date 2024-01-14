<?php
class auto 
{
   
    private static $subvencion = 0;
    public string $color_cuero;

    public int $total;

    public function __construct 
    (
        public string $gama
    ){}

    public function compra($gama)
    {
        switch($gama)
        {   
            case $gama=="vocho":
                $this->total=35000;
                break;
            case $gama=="jeep":
                $this->total=450000;
                break;
            case $gama=="ferrari":
                $this->total=3000000;
                break;
        }
       
    }

    static function discount()
    {
        if(date("m-d-t")>"01-09-2023")
        {
            self::$subvencion=10000;
        }
    }
    
    public function getTotal()
    {
       $result = $this->total - self::$subvencion;
       return $result;
    }
    public function calefac()
    {
        $this->total+=3000;
    }

    public function colorCuero($color_cuero)
    {
        if($color_cuero=="azul")
        {
            $this->total+=5200;
        } else if($color_cuero=="guinda")
        {   
            $this->total+=3400;
        }
        else 
        {
            echo "color no disponible";
        }
    }

    public function getAuto()
    {
       
    }

    
}

?>