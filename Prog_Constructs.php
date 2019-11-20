<?php

echo "Enter a : ";
fscanf(STDIN,"%f",$a);
echo "Enter b : ";
fscanf(STDIN,"%f",$b);
echo "Enter c : ";
fscanf(STDIN,"%f",$c);

//compute a+b*c 
$result1 = $a+$b*$c;
echo "Result of ".$a."+(".$b."*".$c.") is:".$result1."\n";

//compute a*b+c
$result2 = $a*$b+$c;
echo "Result of (".$a."*".$b.")+".$c." is:".$result2."\n";


?>