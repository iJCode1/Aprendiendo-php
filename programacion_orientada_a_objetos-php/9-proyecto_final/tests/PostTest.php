<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase{

  // Creación de método para agregar comentarios
  public function test_add_comment_to_post(){

    // Creación de objetos
    $post = new Post();
    $comment = new Comment();

    // Métodos
    $post->addComment($comment);

    // Afirmaciones con PHPUnit
    $this->assertEquals(1, $post->countComments()); // Comprobar que se tiene 1 post
    $this->assertInstanceOf(Comment::class, $post->getComments()[0]); // Consultar si el primer comentario es una instancia de la clase

  }
}

?>