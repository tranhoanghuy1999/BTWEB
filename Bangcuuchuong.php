<<?php echo "<table border='1'>";
echo "<br>";
for($a=2;$a<=10;$a++)
{
	echo "<td>";
	for($b=1;$b<=10;$b++)
	{
		echo "$a x $b=".$a*$b."<br>";
	}
	echo "<td>";
}	
echo "</tr>";
echo "</table>";

$car_brand= array("Toyata","Toshida","Ozawa"); 
foreach($car_brand as $values)
	echo "{$values}. <br>";
var_dump($car_brand)
foreach($car_brand as $key=>$values)
	$n=$key+1;
	echo "Sp đứng thứ $n là {$values}.";
//mảng đa chiều
	
?>