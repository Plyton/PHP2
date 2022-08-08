<?php

namespace Ruslan\Homework1;

class Article
{
  private string $name;
  private string $title;
  private string $text;
  private int $id;
  private int $idUser;
  
  public function __construct(string $text)
  {
    $this->text = $text;
  }
  public function __toString()
  {
    return $this->text;
  }
}
