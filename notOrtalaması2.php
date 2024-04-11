<?php
    $vize = 50;
    $final = 73;
   
    $ort = $vize * 0.4+$final * 0.6;
   
    if($ort>=84.5 && $ort<=100)
 	    echo("Not ortalamanız ".$ort."-Notunuz 'AA'");
    else if($ort>=69.5 && $ort<84.5)	
        echo("Not ortalamanız ".$ort."-Notunuz 'BB'");
    else if($ort>=59.5 && $ort<69.5)
        echo("Not ortalamanız " .$ort ."- Notunuz 'CC'");
    else if($ort>=49.5 && $ort<59.5)
		printf("Not ortalamanız " .$ort ."- Notunuz 'DD'");
	else
		echo("Not ortalamanız " .$ort ."- Notunuz 'FF'");
?>