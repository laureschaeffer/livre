<?php

class Livre {

    private string $titre;
    private int $anneeDeParution;
    private int $nbPages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $anneeDeParution, int $nbPages, float $prix, Auteur $auteur){
        $this->titre=$titre;
        $this->nbPages=$nbPages;
        $this->anneeDeParution=$anneeDeParution;
        $this->prix=$prix;
        $this->auteur=$auteur;
        $this->auteur->ajouterLivre($this);
    }
// ajouter tout l'objet livre à l'objet auteur 
  
    public function getTitre() : string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }


    public function getAnneeDeParution() : int
    {
        return $this->anneeDeParution;
    }


    public function setAnneeDeParution(int $anneeDeParution)
    {
        $this->anneeDeParution = $anneeDeParution;

        return $this;
    }

    public function getNbPages() : int
    {
        return $this->nbPages;
    }


    public function setNbPages(int $nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }



    public function getPrix() : float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur() : Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    // ------------------fonctions--------------------------

    public function __toString() {
        return $this->titre." ".$this->anneeDeParution;
    }

    public function afficherInfos(){
        return $this->titre." est sorti en ".$this->anneeDeParution.", contient ".$this->nbPages." pages, coute ".$this->prix." € et a été écrit par ".$this->auteur." <br>";
    }

}
