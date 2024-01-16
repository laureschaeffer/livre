<?php

class Auteur{

    private string $prenom;
    private string $nom;
    private array $livres;

    public function __construct(string $prenom, string $nom){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->livres = [];
    }

    
    public function getPrenom() : string
    {
        return $this->prenom;
    }


    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    

    public function getNom() : string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

// --------------------fonctions----------------

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
        // array_push($this->livres, $livre);
    }

    public function afficherBibliographie(){
        $result =  "<h1>Livres de $this</h1>";
        foreach ($this->livres as $livre) {
            $result .= $livre."<br>";
        }
        return $result;
    }
}
