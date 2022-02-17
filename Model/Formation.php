<?php

    class Formation{
        private $titre;
        private $pdp;
        private	$desp;
        private	$video;
        private $prix; 
        function __construct($titre,$pdp,$desp,$video,$prix){
            $this->titre = $titre;
            $this->pdp = $pdp;
            $this->desp = $desp;
            $this->video = $video; 
           
            $this->prix = $prix;


        }   
      
        
        public function gettitre()
        {
                return $this->titre;
        }
        public function settitre($titre)
        {
                $this->titre = $titre;

               
        }

        public function getPdp()
        {
                return $this->pdp;
        }

       
        public function setPdp($pdp)
        {
                $this->pdp = $pdp;

        }

        
        public function getdesp()
        {
                return $this->desp;
        }

        
        public function setdesp($desp)
        {
                $this->desp = $desp;

        }

        
        public function getvideo()
        {
                return $this->video;
        }

        public function setvideo($video)
        {
                $this->video = $video;

        }
 
      

      

        
        public function getprix()
        {
                return $this->prix;
        }

       
        public function setprix($prix)
        {
                $this->prix = $prix;

        }
   
    }
?>