<html>
<body>

<?php
   //Dizilerde farklı değer atama ve erişim yöntemleri
   
   $arr_deg01 = array("Adı" => "Ahmet  ", "Soyadı" => "Ertürk","Yaşı" => 25 );
   echo $arr_deg01["Adı"]; 
   echo "</br>";
   
   $arr_deg02 = array("Adı" => "Ahmet", "Soyadı" => "Ertürk",11 => 25,12 => TRUE);
   echo $arr_deg02[11];
   
  // $arr_deg03 = array("Adı" => "Ahmet", "Soyadı" => "Ertürk", 5 => 25);
  // echo $arr_deg03[1];
   echo "</br>";
   $arr_deg04 = array(5 ,10 ,15 ,20 ,25);
   echo $arr_deg04[0];
   echo "</br>";
   $arr_deg05 = array("Adı" => "Ahmet", "Soyadı" => "Ertürk",25);
   echo $arr_deg05[0];
   
?>
</body>
</html>