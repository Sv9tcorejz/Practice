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
	<?php function myfunc(){
		static $count = 0;
		$count++;
		echo $count;
	}
	for($i=0; $i<5; $i++){
		myfunc();
	}?>
	<form method="post">
		<div><p>Ваше ім'я: <input type="text" name="name"></p></div>
		<div><p>Скільки років: <input type="text" name="age"></p></div>
		<div><input type="submit"></div>
	</form>
	<div>Привіт,<?php echo htmlspecialchars($_POST['name']);?></div>
	<div>Вам<?php echo (int)($_POST['age']);?>років</div>
	<?php if(preg_match("/petro/i", "Oleg andriy"))
	{ echo "success";} 
	else { echo "Not found";}?>
</body>
</html>