<?php

Class Grenousse extends Pokemon
{

        public $evol;
	
	public function __construct($evol)
	{
        $this->evol = $evol;
        
        if ($evol == 0)
        {        

		$this->type = "Eau";
        $this->nom = "Grenousse";
        $this->pv = 60;
        $this->attaque1 = "<button>Ecras'Face</button>"; 
        $this->attaque2 = "<button>Goutte à Goutte</button>";
        $this->faiblesse = "plante";
        $this->intensite_attaque1 = 10;
        $this->intensite_attaque2 = 20;
        $this->carte = '<img id = "gre" src ="grenousse.jpg">';
        }

         elseif ($evol ==1)
        {
        $this->type = "Eau";
        $this->nom = "Croâporal";
        $this->pv = 80;
        $this->attaque1 = "<button>Goutte à Goutte</button>"; 
        $this->attaque2 = "<button>Aqua-Vague</button>";
        $this->faiblesse = "plante";
        $this->intensite_attaque1 = 20;
        $this->intensite_attaque2 = 40;
        $this->carte = '<img src ="croaporal.jpg">';
         
        }


        elseif ($evol ==2)
        {
        $this->type = "Eau";
        $this->nom = "Amphinobi";
        $this->pv = 130;
        $this->attaque1 = "<button>Ombre Sature</button>"; 
        $this->attaque2 = "<button>Tranch'Lune</button>";
        $this->faiblesse = "plante";
        $this->intensite_attaque1 = 30;
        $this->intensite_attaque2 = 120;
        $this->carte = '<img src ="amphinobi.png">';
        }
  	} 
}



?>