<?php
    Class Pokemon
    {
        public $type;
        public $nom;
		public $pv;        
        public $attaque1; 
        public $attaque2;
        public $faiblesse;
        public $intensite_attaque1;
        public $intensite_attaque2;
        public $carte; 
        


        public function getParams()
        {
            $params = array
            (
            "type"=> $this->type,
            "nom"=> $this->nom,
            "pv" => $this->pv,
            "attaque1" => $this->attaque1,
            "attaque2" => $this->attaque2,
            "faiblesse" => $this->faiblesse,
            "intensite_attaque1" => $this->intensite_attaque1,
            "intensite_attaque2" => $this->intensite_attaque2,
            "carte" => $this->carte,
            );
                return $params;
        }


  //       public function attaquer( Pokemon $p, int $num_attaque )
  //       {
  //               /*
  //                L'attaque est-elle valide ?
  //                   (techniquement, le paramètre $num_attaque ne peux valoir que 1 ou 2,
  //                   ce qui correspond à attaque1 et attaque2.)
  //               */

  //           if( $num_attaque != 1 && $num_attaque != 2 )
  //           {
  //               return "Cette attaque est inconnue !";
  //           }
  //                /*                              
  //                   Vérifier que l'attaque est possible
  //                   (l'énergie de l'attaquant doit être égale ou supérieur à l'énergie
  //                   de l'attaque.)
  //                */

  //           if( $num_attaque==1 )

  //               $e = $this->attaque1;
  //           else
  //               $e = $this->attaque2;


  //           if( $e["energie"] > $this->energie )
  //           {
  //               return "L'attaque requière plus d'énergie que " . $this->nom. " n'en a !";
  //           }
  //               /*
  //                   attaquer !
  //                   (soustraire la force de l'attaque aux vie du pokemon $p attaqué) 
  //               */
  //           $p->pv -= $e["degats"]; 
  //           return $this->nom . " attaque " .$p->nom . " avec " . $e["nom"]. ". "
  //               . $p->nom . " a perdu " . $e["degats"] . " points de vie, "
  //               . "il lui reste maintenant " . $p->pv . " points de vie.";
  //   }
  // }



       
    }
?>