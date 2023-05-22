<?php



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td,th
		{
			border:1px solid black;
		}
		
	</style>
</head>
<body>
	<?php




$marks=array(array(20,60,80),array(40,70,80),array(60,90,80),array(80,56,80),array(90,64,80),array(20,60,80),array(40,70,80),array(60,90,80),array(80,56,80),array(90,64,80),array(20,60,80),array(40,70,80),array(60,90,80),array(80,56,80),array(90,64,80));
$length=count($marks);
echo "<table>";
echo "<tr>";
echo "<th>Index</th>";
echo "<th>English</th>";
echo "<th>Maths</th>";
echo "<th>Science</th>";
echo"</tr>";

for ($i=0; $i < $length; ++$i) { 
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>" .$marks[$i][0]."</td>";
	echo "<td>" .$marks[$i][1]."</td>";
	echo "<td>" .$marks[$i][2]."</td>";
	echo "</tr>";

	$eng=$marks[$i][0];
	
	
}


echo "</table>";
$eng_total=array_sum(array_column($marks,0));
	$eng_avg=$eng_total/$length;
	echo"Avg OF ENGLISH MARKS FOR WHOLE CLASS :".$eng_avg;
	echo "<br>";
	$math_total=array_sum(array_column($marks,1));
	$math_avg=$math_total/$length;
	echo"Avg OF MATHS MARKS FOR WHOLE CLASS :".$math_avg;
	echo "<br>";
	$science_total=array_sum(array_column($marks,2));
	$science_avg=$science_total/$length;
	echo"Avg OF SCIENCE  MARKS FOR WHOLE CLASS :".$science_avg;

?>


</body>
</html>



