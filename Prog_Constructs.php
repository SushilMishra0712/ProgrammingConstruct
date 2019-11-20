<?php

echo "Enter a : ";
fscanf(STDIN,"%f",$a);
echo "Enter b : ";
fscanf(STDIN,"%f",$b);
echo "Enter c : ";
fscanf(STDIN,"%f",$c);

//compute a+b*c 
$result = $a+$b*$c;
echo "Result of ".$a."+(".$b."*".$c.") is:".$result."\n";

?>