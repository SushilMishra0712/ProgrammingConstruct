<?php

echo "Enter a : ";
fscanf(STDIN,"%f",$a);
echo "Enter b : ";
fscanf(STDIN,"%f",$b);
echo "Enter c : ";
fscanf(STDIN,"%f",$c);

//compute a+b*c 
$result1 = $a+($b*$c);
echo "Result of ".$a."+(".$b."*".$c.") is:".$result1."\n";

//compute a*b+c
$result2 = ($a*$b)+$c;
echo "Result of (".$a."*".$b.")+".$c." is:".$result2."\n";

//compute c+a/b
$result3 = $c+($a/$b);
echo "Result of ".$c."+(".$a."/".$b.") is:".$result3."\n";

//compute a%b+c
$result4 = ($a%$b)+$c;
echo "Result of (".$a."%".$b.")+".$c." is:".$result4."\n";

//arrays to store the results in dictionary
$dictionary = array("UseCase-2"=>"$result1","UseCase-3"=>"$result2","UseCase-4"=>$result3,"UseCase-5"=>$result4);
$size_of_dictionary = count($dictionary);
print_r($dictionary);

//array to read the values from the dictionary
$read_array = array();
for($i=2;$i<$size_of_dictionary+2;$i++)
{
    array_push($read_array,$dictionary["UseCase-".$i]);
}
print_r($read_array);

?>