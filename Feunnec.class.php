<?php

Class Feunnec extends Pokemon
{

    public $evol;
	
	public function __construct($evol)
	{

        $this->evol = $evol;
        
        if ($evol == 0)
        {        
        
		$this->type = "Feu";
        $this->nom = "Feunnec";
        $this->pv = 60;
        $this->attaque1 = "<button>Griffe</button>"; 
        $this->attaque2 = "<button>Charbon Mutant</button>";
        $this->faiblesse = "eau";
        $this->intensite_attaque1 = 10;
        $this->intensite_attaque2 = 20;
        $this->carte = '<img src ="fennec.png">';
        }


        elseif ($evol ==1)
        {
        $this->type = "Feu";
        $this->nom = "Roussil";
        $this->pv = 80;
        $this->attaque1 = "<button>Souffle-Feu</button>"; 
        $this->attaque2 = "<button>Queue de Flammes</button>";
        $this->faiblesse = "eau";
        $this->intensite_attaque1 = 20;
        $this->intensite_attaque2 = 60;
        $this->carte = '<img src ="roussil.png">';
         
        }


        elseif ($evol ==2)
        {
        $this->type = "Feu";
        $this->nom = "Goupelin";
        $this->pv = 140;
        $this->attaque1 = "<button>Feu Follet</button>"; 
        $this->attaque2 = "<button>Deflagration</button>";
        $this->faiblesse = "eau";
        $this->intensite_attaque1 = 30;
        $this->intensite_attaque2 = 120;
        $this->carte = '<img src ="goupelin.png">';
        }
  	} 
}




?>