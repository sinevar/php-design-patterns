<?php

spl_autoload_register(function($class) {

  $directories = array(
      'adapter-design-pattern',
      'builder-design-pattern',
  );

  foreach ($directories as $dir) {
      $file = "$dir/classes/$class.php";
      if (file_exists($file)) {
          include $file;
      }
  }

});
