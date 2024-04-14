<html>
<body>

<?php
   $dil = array("laravel","php","phyton","c#","java");
   unset( $dil[0] );
   while(list ($anahtar, $deger)= each ($dil)){
	   echo "$anahtar -> $deger <br>"
   }
   
?>
</body>
</html>