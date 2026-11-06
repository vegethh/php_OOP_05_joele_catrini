<?php

abstract class Category {
  abstract public function getMyCategory();
}

class Attualita extends Category {
  public function getMyCategory() {
    return "Attualità";
  }
}

class Sport extends Category {
  public function getMyCategory() {
    return "Sport";
  }
}

class Gossip extends Category {
  public function getMyCategory() {
    return "Gossip";
  }
}

class Storia extends Category {
  public function getMyCategory() {
    return "Storia";
  }
}

?>