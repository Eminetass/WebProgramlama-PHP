<?php
  $boy = 1.75;
  $kilo = 70;

  $vki = $kilo/($boy*$boy) ; 
  $vki=round($vki,2);

  echo "Vücut kitle indexiniz : ";
  if ($vki<20)
      echo $vki ." - Zayıf";
  else if($vki>=20 && $vki<=24.9)
      echo $vki ." - Normal";
  else if ($vki>=25 && $vki<=29.9)
      echo $vki ." - Hafif Şişman";
  else if ($vki>=30 && $vki<=34.9)
      echo $vki ." - Şişman";
  else if($vki>=35 && $vki<=44.9)
      echo $vki ." - Sağlık açısından önemli";
  else if($vki>=45 && $vki<=49.9)
      echo $vki ." - Aşırı şişman";
  else if ($vki>49.9)
      echo $vki ." - Morbid (Ölümcül Şişman)";
?>