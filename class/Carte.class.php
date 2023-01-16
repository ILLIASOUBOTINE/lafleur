<?php
class Carte {
    private int $id;
    private string $title;
    private float $prix;
    private string $urlPhoto;
    private string $dispo;

    
    public function __construct($id,$title,$prix,$urlPhoto,$dispo)
    {
        $this->id = $id;
        $this->title = $title;
        $this->prix = $prix;
        $this->urlPhoto = $urlPhoto;
        $this->dispo = $dispo;
    }


    public function getId(): int
    {
        return $this->id;
    }

    
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

   
    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;

    }

  
    public function getUrlPhoto(): string
    {
        return $this->urlPhoto;
    }

 
    public function setUrlPhoto(string $urlPhoto): void
    {
        $this->urlPhoto = $urlPhoto;
    }

  
    public function getDispo(): string
    {
        return $this->dispo;
    }

    
    public function setDispo(string $dispo): void
    {
        $this->dispo = $dispo;
    }

    public function createViewHtmlCarte(): string
    {
      $str = '<div class="carte marg5">'.
        '<a href="#"><img class="img_carte" src='."$this->urlPhoto".' title="details"></a>
        <p class="title_carte pd24w600">'.$this->title.'</p>
        <div class="footer_carte">
        <span class="prix_carte int20w400">'."$this->prix".'</span>
        <button class="btn_ajouter int20w400" title='.$this->dispo.'>'.$this->dispo.'</button>
        </div>
        </div>';
        
        return $str;
    }
}



?>