<?php ## Операторы равенства и эквивалентности.
  $yeap = array("реальность", true);
  $nein = array("реальность", "иллюзорна");
  if ($yeap == $nein)  echo "Два массива равны";
  if ($yeap === $nein) echo "Два массива эквивалентны";
?>