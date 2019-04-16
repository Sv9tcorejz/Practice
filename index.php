<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo "Hello World!";?>
	<?php $dat = date("d.m.y"); echo "$dat";?>
	<?php for ($i=1; $i<=5; $i++){echo(pow($i,2));}?>
	<?php $a = 5; echo gettype($a);?>
	<?php $b = 3; if(isset($b)){ echo "$b"; }?>
	<?php define("c",1); echo c;?>
	<!--php x = (if)? true(): false() -->
	<?php $d = 11; 
		if($d == 10){
		echo "<br> d = 10";}
		else if($d < 10){echo "<br> d<10";}
		else {echo "<br> d > 10 <br>";}?>
	<?php $i=0; while($i<10){
		echo $i += 1;}?>
	<?php $i=0; do{ 
		echo $i;
	}while($i++<10)?>
	<?php 
		$birth=[
		"petro"=>"322",
		"andriy"=>"233"
	];
	foreach ($birth as $a => $b) {
		echo "<br> $a --> $b <br>";
	}?>
</body>
</html>