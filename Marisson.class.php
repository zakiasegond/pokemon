<?php

Class Marisson extends Pokemon
{


	public function __construct($evol)
	{
        $this->evol = $evol;
        
        if ($evol == 0)
        {        

		$this->type = "Plante";
        $this->nom = "Marisson";
        $this->pv = 60;
        $this->attaque1 = "<button>Fouet Lianes</button>"; 
        $this->attaque2 = "<button>Canon Graine</button>";
        $this->faiblesse = "feu";
        $this->intensite_attaque1 = 10;
        $this->intensite_attaque2 = 20;
        $this->carte = '<img src ="marisson.png">';
        }



         elseif ($evol ==1)
        {
        $this->type = "Plante";
        $this->nom = "Bouguérisse";
        $this->pv = 90;
        $this->attaque1 = "<button>Vampigraine</button>"; 
        $this->attaque2 = "<button>Poing Dard</button>";
        $this->faiblesse = "feu";
        $this->intensite_attaque1 = 20;
        $this->intensite_attaque2 = 50;
        $this->carte = '<img src ="boguerisse.jpg">';
        }



        elseif ($evol ==2)
        {
        $this->type = "Plante";
        $this->nom = "Blindépique";
        $this->pv = 150;
        $this->attaque1 = "<button>Poing Dard</button>"; 
        $this->attaque2 = "<button>Attaque Trébuchante</button>";
        $this->faiblesse = "feu";
        $this->intensite_attaque1 = 50;
        $this->intensite_attaque2 = 80;
        $this->carte = '<img src ="blindepique.jpg">';
        }

  	} 

}


?>