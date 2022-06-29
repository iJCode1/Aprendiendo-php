<?php

namespace App;

class Post{

  protected $comments = [];

  public function addComment(Comment $comment){ // Validar que el $comment sea del tipo Comment
    $this->comments[] = $comment;
  }

  public function countComments(){
    return count($this->comments);
  }

  public function getComments(){
    return $this->comments;
  }

}

?>