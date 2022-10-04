<?php
class Stranka {
   public $id;
   public $titulek;
   public $menu;

   function __construct($id,$titulek,$menu,$h2,){
    $this->id=$id;
    $this->titulek=$titulek;
    $this->menu=$menu;
    $this->h2=$h2;

 
}

}

$seznamStranek =[
"uvod" => new Stranka ("uvod","Moje oblíbené recepty","Domů","Moje oblíbené recepty"),
/* "recipes"=>new Stranka ("recipes","Recepty - Oblíbené recepty","Recept","Recept"), */
"galerie"=>new Stranka ("galerie","Galerie - Oblíbené recepty","Galerie","Galerie dortíčků"),
"about"=>new Stranka ("about","O mě - Oblíbené recepty","O mě"," O mě"),



];