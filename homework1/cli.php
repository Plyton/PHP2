<?php
require_once __DIR__ . "/vendor/autoload.php";

use Ruslan\Homework1\{Article, Comment, User};

$faker = Faker\Factory::create();

foreach ($argv as $value){
  switch ($value) {
    case 'user':
      echo new User($faker->name);
      break;
    case 'post':
      echo new Comment($faker->text);
      break;
    case 'comment':
      echo new Article($faker->text);
      break;
  }
}
