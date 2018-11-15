<?php

	echo "<h1> Program 8 </h1>";
	$arr=array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9));


	$arb=array(
		array(4,2,3),
		array(5,1,6),
		array(8,2,1));

	echo "<table> <tr> <td>";
	echo "The Given Matrix <strong> A </strong>: <br>";
	for($i=0; $i<3; $i++)
	{
		for($j=0; $j<3; $j++)
		{
			echo $arr[$i][$j]. " ";
		}
		echo "<br>";
	}
	echo "</td><td>";
	echo "The Given Matrix <strong> B </strong>: <br>";
	for($i=0; $i<3; $i++)
	{
		for($j=0; $j<3; $j++)
		{
			echo $arb[$i][$j]. " ";
		}
		echo "<br>";
	}
	echo "</td></tr></table>";

	$val=0;
	if(isset($_POST['trans']))
	{
		$val=1;
	}
	else if(isset($_POST['add']))
	{
		$val=2;
	}

	switch ($val) {
		case 1:
				echo "<table> <tr> <td>";
				echo "<br> <strong>The Transpose Of Matrix  <h1>A</h1> </strong> <br>";
				for($i=0; $i<3; $i++)
				{
					for($j=0; $j<3; $j++)
					{
						echo $arr[$j][$i]. " ";
					}
					echo "<br>";
				}
				echo "</td><td>";
				echo "<br> <strong>The Transpose Of Matrix <h1>B</h1> </strong> <br>";
				for($i=0; $i<3; $i++)
				{
					for($j=0; $j<3; $j++)
					{
						echo $arb[$j][$i]. " ";
					}
					echo "<br>";
				}
				echo "</td></tr></table>";
			break;

		case 2:
				echo "<br> <strong> Addition of two matrices </strong>: <br>";
				for($i=0; $i<3; $i++)
				{
					for($j=0; $j<3; $j++)
					{
						echo $arr[$i][$j]+$arb[$i][$j]. " ";
					}
					echo "<br>";
				}
				echo "</td></tr></table>";
			break;
		
		default:
			# code...
			break;
	}
	

?>

<html>
<head>
<title> All in One program 8 </title>

	<style type="text/css">
		.btn
		{
			background: gray;
			padding: 2px 5px;
			border: none;
		}
	</style>

</head>
<body>
	<form name="form" method="post">
		<input class="btn" type="submit" value="Get Transpose" name="trans"/>
		<input class="btn" type="submit" value="Get Addition" name="add"/>
		<input class="btn" type="submit" value="Get Multiplication" name="mult"/>		
	</form>
</body>
</html>

