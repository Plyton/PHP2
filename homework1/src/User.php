<?php

namespace Ruslan\Homework1;

class User
{
  private string $name;
  private string $surname;
  private int $id;
  
  public function __construct(string $name)
  {
    $this->name = $name;
  }
  public function __toString()
  {
    return $this->name;
  }
}
