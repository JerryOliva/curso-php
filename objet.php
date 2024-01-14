<?php

    class peer
    {
        public function __construct(
            public string $nom,
            public string $ocup,
            public string $dire,
            public string $phon
        ){}

        public function setNom($nom)
        {
            $this->nom=$nom;
        }

        public function setOcup($ocup)
        {
            $this->ocup=$ocup;
        }
        public function setDir($dire)
        {
            $this->dire=$dire;
        }

        public function setPhon($phon)
        {
            $this->phon=$phon;
        }

        public function getNom()
        {
            return $this->nom;
        }
        public function getOcup()
        {
            return $this->ocup;
        }

        public function getDir()
        {
            return $this->dire;
        }

        public function getPho()
        {
            return $this->phon;
        }
    }

    class male extends peer
    {
        public function charge()
        {
            $this->nom;
            $this->ocup;
            $this->dire;
            $this->phon;
        } 
    }

    class fem extends male
    {
       public function charge()
       {
        $this->nom;
        $this->ocup;
        $this->dire;
        $this->phon;
       }
        
    }
?>