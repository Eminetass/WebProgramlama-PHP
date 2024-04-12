<html>
<body>
<?php
    $arr_deg01 = array ("Adı" => "Ahmet", "Soyadı" => "Ertürk ", "Yaşı" => 25);
    $arr_deg02 = array ("Adı" => "Ahmet", 10 => "Ertürk ", 11 => 27, 12 => TRUE);
    $arr_deg03 = array ("Ahmet", "Ertürk", 25);
    $arr_deg04 = array (5, 10, 15, 20);
    $arr_deg05 = array ("Adı" => "Ahmet", "Soyadı" => "Ertürk ", 25,"İşi" => "Öğrenci", 3);
    
    //Bu PHP dosyasında karakter dizilerini birleştirme işlemcisi(.) kullanılmıştır.
    echo $arr_deg01["Adı"]." ".$arr_deg01["Soyadı"]." ".$arr_deg01["Yaşı"].'</br>';
    echo $arr_deg02["Adı"]." ".$arr_deg02[10]." ".$arr_deg02[11]." ".$arr_deg02[12];
    echo '<br/>';	
    /* ilk dizi elemanına 0'dan başlayarak indeksleme yapılır. */
    echo $arr_deg03[0]." ".$arr_deg03[1]." ".$arr_deg03[2].'<br/>'; 
    echo $arr_deg04[0]." ".$arr_deg04[1]." ".$arr_deg04[2]." ".$arr_deg04[3].'<br/>';
    echo $arr_deg05["Adı"]." ".$arr_deg05["Soyadı"]." ".$arr_deg05[0]." ".$arr_deg05[1]; 
    
	echo "</br>";
	//FARKLI DİZİ TANIMLAMALARI
	$arr_deg06 = array ("Adı" => "Ahmet", "Soyadı" => "Ertürk ", "Yaşı" => 25);
    $arr_deg07['Adı'] = "Ahmet";
    $arr_deg07['Soyadı'] = "Ertürk ";
    $arr_deg07['Yaşı'] = 25;

    echo $arr_deg06["Adı"]." ".$arr_deg06["Soyadı"]." ".$arr_deg06["Yaşı"].'<br/>';

    echo $arr_deg07["Adı"]." ".$arr_deg07["Soyadı"]." ".$arr_deg07["Yaşı"];
	
?>
</body>
</html>