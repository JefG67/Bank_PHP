<?php

class Titulaire {
    
    public string  $noms;
    private string $prenoms;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $comptes;




    public function __construct(string $noms, string $prenoms, string $dateDeNaissance, string $ville){
        $this->noms = $noms;
        $this->prenoms = $prenoms;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

       
    public function getNoms(){
                return $this->noms;
    }
        
    public function setNoms($noms){
                $this->noms = $noms;
                return $this;
    }
        
    public function getPrenoms(){
                return $this->prenoms;
    }

    public function setPrenoms($prenoms){
                $this->prenoms = $prenoms;
                return $this;
    }

    public function getDateDeNaissance(){
                return $this->dateDeNaissance ;
    }

    public function getDateDeNaissanceFormatted(){
                return $this->dateDeNaissance->format('d/m/Y');
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance){
                $this->dateDeNaissance = $dateDeNaissance;
                return $this;
    }
       
    public function getVille(){
                return $this->ville;
    }
        
    public function setVille($ville){
                $this->ville = $ville;
                return $this;
    }
    public function getCompte() {
                return $this ->comptes;
    }
    public function setCompte($comptes){
                $this->comptes = $comptes;
                return $this;
    }
    // ajouter des comptes dans mon tableau  
    public function addCompte(Compte $compte){
        $this->comptes[] = $compte;
    }


    public function calculAge(){

        $aujourdhui = new DateTime();
        $age = $this->dateDeNaissance->diff($aujourdhui);
        return $age->format('%y');
    }
  
    // __toString doit renvoyer un string qui représente l'objet sous forme de string
    public function __toString()
    {
      return "$this->prenoms $this->noms";
    }
 

    

    public function afficherInfo(){

        $result = "<ul>";
            foreach ($this->comptes as $compte){
                // $result = $result . $compte;
                $result .= "<li>$compte</li>"; // a = a . b   <=>   a .= b
            }
            $result .= "</ul>";
          
            
      
            // $result = "";
            // foreach ($this->comptes as $compte) {
            //     $result .= $compte . ", "; // "compte1, compte2, "
            // }
    
        echo "<p>L'utilisateur $this née le ". $this->getDateDeNaissanceFormatted() . ", âgé de ".$this->calculAge()." ans, réside à $this->ville et possède les comptes suivants: </p>" . $result;
        



    }
}