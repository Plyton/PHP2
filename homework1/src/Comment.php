<?php

namespace Ruslan\Homework1;

class Comment
{
  private string $comment;
  private int $id;
  private int $idUser;
  private int $idArticle;
  
  public function __construct(string $comment)
  {
    $this->comment = $comment;
  }
  public function __toString()
  {
    return $this->comment;
  }
}
