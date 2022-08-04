<?php
spl_autoload_register(function ($class) {
  if (strpos($class, '_')) $class = str_replace('_', '/', $class);

  $file = strpos(__DIR__, '\\') ?
    str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php' :
    str_replace('/', '/', $class) . '.php';

  if (file_exists($file)) {
    require $file;
  }
});
