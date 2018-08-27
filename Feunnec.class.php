<?php

Class Feunnec extends Pokemon
{


	
	public function __construct()
	{
		$this->type = "Feu";
        $this->nom = "Feunnec";
        $this->nom_evol1 = "Roussil";
        $this->nom_evol2 = "Goupelin";
        $this->pv = 60;
        $this->attaque1 = "Griffe"; 
        $this->attaque2 = "Charbon Mutant";
        $this->faiblesse = "eau";
        $this->intensite_attaque1 = 10;
        $this->intensite_attaque2 = 20;
        $this->evol1 = $this->pv + 20 . $this->nom = "Roussil";
        $this->carte = '<img src ="fennec.png">';
        
  	} 
}




?>