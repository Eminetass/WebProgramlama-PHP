<html>
<body>
<?php
   
    //ÇOK BOYUTLU DİZİLER
    $arr_deg03 = array("bir" => 1, "iki" => array("altbir" => 11, "altiki" => 22), "uc" => 3);
    echo $arr_deg03["iki"]["altbir"]." ".$arr_deg03["iki"]["altiki"];
    
    echo "</br>";
    //DİZİLERİ SIRALAMA
    $arr_deg = array(5, 21, 12, 3, 9);
    
    // Diziyi küçükten büyüğe sıralama
    sort($arr_deg);					 
	for ($deg01=0; $deg01<count($arr_deg); $deg01++) {
        echo $arr_deg[$deg01] . " ";
    }	
	
    echo '<br/>';
	
    // Diziyi büyükten küçüğe sıralama
    rsort($arr_deg);					 
					 
    for ($deg01=0; $deg01<count($arr_deg); $deg01++) {
          echo $arr_deg[$deg01] . " ";
    }	
   
?>
</body>
</html>