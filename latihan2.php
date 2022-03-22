<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Latihan 2 PHP</title>
</head>
<body>

<?php  
	$color = array('white', 'green', 'red');  
	foreach ($color as $a) {
		echo "$a,";
	}

	sort($color);
	echo "<ul>";
	foreach ($color as $warna)
	{
		echo "<li> $warna </li>";
	}
	echo "</ul>";
?>


<p>-----------2----------------</p>

<?php
  $newarray = array(11,-2,4,35,0,8,-9);
  sort($newarray);
  print_r($newarray);
?>

<p>-----------3----------------</p>

<?php 
$tanggal1 = new DateTime("1981-11-03");
$tanggal2 = new DateTime("2013-09-04");
$interval = $tanggal1->diff($tanggal2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// Menunjukan total hari 
// echo "difference " . $interval->days . " days ";

 ?>


<p>-----------4----------------</p>

<?php
class MyCalculator {
private $a, $b;
public function __construct( $fval, $sval ) {
$this->a = $fval;
$this->b = $sval;
}
	public function add() {
	return $this->a + $this->b;
}
	public function subtract() {
	return $this->a - $this->b;
}
	public function multiply() {
	return $this->a * $this->b;
}
	public function divide() {
	return $this->a / $this->b;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; // Displays 18 
echo $mycalc-> multiply()."\n"; // Displays 72
echo $mycalc-> subtract()."\n"; // Displays 6
echo $mycalc-> divide()."\n"; // Displays 2
?>

<p>-----------5----------------</p>

<?php
$waktu = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $waktu;
?>

</body>
</html>