<?php

Class Marisson extends Pokemon
{



	public function __construct()
	{
		$this->type = "Plante";
        $this->nom = "Marisson";
        $this->pv = 60;
        $this->attaque1 = "Fouet Lianes"; 
        $this->attaque2 = "Canon Graine";
        $this->faiblesse = "feu";
        $this->intensite_attaque1 = 10;
        $this->intensite_attaque2 = 20;
        $this->carte = '<img src ="marisson.png">';
  	} 
}


?>