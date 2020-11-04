<?php

  function output($num) {
    $output = '';
    if($num % 3 == 0 && $num % 5 == 0) {
      $output = 'Coating Damage & Lightning Strike';
      $class = 'both';
    } elseif($num % 3 == 0) {
      $output = 'Coating Damage';
      $class = 'three';
    } elseif($num % 5 == 0) {
      $output = 'Lightning Strike';
      $class = 'five';
    } else {
      $output = $num;
    }

    if(isset($class)) {
      return '<div class="'.$class.'"><p>'.$output.'</p></div>';
    } else {
      return '<div><p>'.$output.'</p></div>';
    }
  }

  for($i=1;$i<=100;$i++) {
    echo output($i);
  }

?>