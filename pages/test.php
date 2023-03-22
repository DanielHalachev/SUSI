<table>
<?php
// declare(strict_types=1);

for ($i=1; $i <= 9; $i++) { 
  echo '<tr>';
  for ($j=1; $j <= 9; $j++) { 
    if ($i == 1 or $j == 1) {
      echo '<th>' . $i*$j . '</th>';
    } else {
      echo '<td>' . $i*$j . '</td>';
    }
  }
  echo '</tr>';
}
?>
</table>
