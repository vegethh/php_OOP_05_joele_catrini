<?php

require_once "class.php";

class Post {
  public $titolo;
  public $categoria;
  public $tag;

  // Dependency Injection della Categoria
  public function __construct($titolo, Category $categoria, $tag) {
    $this->titolo = $titolo;
    $this->categoria = $categoria;
    $this->tag = $tag;
  }

  public function showPost() {
    echo "Titolo: " . $this->titolo . "\n";
    echo "Categoria: " . $this->categoria->getMyCategory() . "\n";
    echo "Tag: " . $this->tag . "\n";
    echo "-------------------------\n";
  }
}

// Istanze con categorie iniettate
$post1 = new Post("Elezioni 2026", new Attualita(), "#politica");
$post2 = new Post("Finale Champions", new Sport(), "#calcio");
$post3 = new Post("Gossip VIP", new Gossip(), "#celebrities");
$post4 = new Post("Roma Antica", new Storia(), "#storia");

$post1->showPost();
$post2->showPost();
$post3->showPost();
$post4->showPost();

?>