<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan</title>
</head>
<body>
	<p>

	<?php

		echo "Tomorrow I 'll learn PHP global variables. ". "<br>". "This is a bad command : del c:\.";

	?>


		</p>

		 <form method='POST'>
	  		 <h2>Please input your name:</h2>
			 <input type="text" name="name">
			 <input type="submit" value="Submit Name">
		 </form>

	<?php
		//memangil variabel dan nama yang telah di input
		$name = $_POST['name'];
		echo "<h3> Hello $name </h3>";
	?>
	<p>--------------Upper--Lower---------------------</p>

	<?php
	//all uppercase letters

	print(strtoupper("contoh kalimat perama uppercase."))." <br>";
	//all lowercase letters
	print(strtolower("CONTOH KALIMAT 2 LOWERCSE")). "<br>";
	// make a string's first character uppercase
	print(ucfirst("membuat huruf besar pada kalimat pertama."))." <br>";
	// make a string's first character of all the words uppercase
	print(ucwords("contoh 4 membuat huruf deran menjadi uppercase."))." <br>";
	?>

	<p>-------------Following string-------------------</p>
	<?php
		$str1= '082307'; 
		echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
	?>
	<p>---------------For loop--------------</p>
	<?php

	for($i=1;$i<=10;$i++)
	{
		if($i<=9)
		{
			echo $i."-";
		}
		else
			{
				echo $i;
			}
	}
	?>

	<p>---------0-30----------</p>
	<?php

	$awal = 1;
	$akhir = 30;

	$sum = 0;
	for ($i = $awal; $i <= $akhir; $i++) {
	    $sum += $i;
	}

	echo "Sum from " . $awal . " to " . $akhir . " = " . $sum;
	?>

	<p>Loop **</p>
	<?php
	for($i=1;$i<=5;$i++)
	{
	   for ($j=1;$j<=$i;$j++)
	    {
		 echo "*";
		    if($i< $j)
			 {
			   echo " ";
			 }
	     }
	 	echo "\n";
	}
?>


</body>
</html>