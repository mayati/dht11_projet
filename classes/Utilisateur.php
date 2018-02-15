<?php 

class Utilisateur {
    
    public $id;
    
    public $prenom;
    
    public $nom;
    
    public function __construct($id, $prenom, $nom) {
        
        $this->id = $id;
        
        $this->prenom = $prenom;
        
        $this->nom = $nom;
    }
}