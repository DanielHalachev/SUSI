<?php
  // declare(strict_types=1);
  echo '<table><tr>';

  for ($i=1; $i <= 9; $i++) { 
    echo '<th>' . $i . '</th>';
  }
  echo '</tr>';

  for ($i=2; $i <= 9; $i++) { 
  echo '<tr>';
  echo '<th>' . $i . '</th>';
  for ($j=2; $j <= 9; $j++) { 
    echo '<td>' . $i*$j . '</td>';
  }
    echo '</tr>';
  }
  echo '</table>';
?>
