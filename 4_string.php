<?php
$text = <<< TEKST
  zsk - Zespół
  szkół
  komunikacji
  TEKST;
echo "Przed uzyciem funkcji nl2br:<br>$text<br>"; //newlinetobreak
echo "<br>Po uzyciu funkcji nl2br:<br> ";
echo nl2br($text);
 ?>
