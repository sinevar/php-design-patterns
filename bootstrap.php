<?php

spl_autoload_register(function($class) {

  foreach (array('adapter-design-pattern/classes') as $dir) {
    $file = "$dir/$class.php";
    if (file_exists($file)) {
      include $file;
    }
  }

});
