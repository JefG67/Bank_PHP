<?php

class Compte{
  
   private  string $libelle;
   private  float $solde;
   private  string $devise;
   private  Titulaire $titulaire; 
  

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire) { 
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this); // on notifie notre Titulaire qu'on est lié à lui (qu'il nous ajoute à son tableau de comptes)
    }   
     
    
   public function getLibelle(){
      return $this->libelle;
    }
   
   public function setLibelle($libelle){
      $this->libelle = $libelle;
      return $this;
    }

   
   public function getSolde(){
      return $this->solde;
    }

 
   public function setSolde($solde){
      $this->solde = $solde;
      return $this;
    }
  
   public function getDevise(){
      return $this->devise;
    }

   
   public function setDevise($devise){
      $this->devise = $devise;
      return $this;
    } 


   public function getTitulaire(){
      return $this->titulaire;
    }

  
   public function setTitulaire($titulaire){
      $this->titulaire = $titulaire;
      return $this;
   }

    //methode pour crediter
    public function Crediter($cred){   
        $this->solde = $this->solde + $cred;
        echo $this->solde;
    }

    //methode pour debiter
    public function Debiter($deb){
        $this->solde = $this->solde - $deb;
        echo $this->solde;
    }    

    //methode pour faire un virement
    public function Virement(float $montantTransfert, $compteCible ){
        if ($montantTransfert > 0 && $montantTransfert <= $this ->solde){
            $this-> Debiter($montantTransfert);
            $compteCible-> Crediter($montantTransfert);
            echo "le transfert est effectué";
        }
        else {
            echo "le transfert a échoué";
        }

    
    }
  
    // __toString doit renvoyer un string qui représente l'objet sous forme de string
    public function __toString()
    {
      return "Libellé : " . $this->libelle . "Solde : " . $this->solde . " devise " . $this->devise;
    }
 
 
}