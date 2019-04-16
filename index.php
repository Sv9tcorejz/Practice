<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo "Hello World!"; ?>
	<?php $dat = date("d.m.y"); echo "$dat"; ?>
	<?php
	for ($i=1; $i<=5; $i++){
		echo(pow($i,2));
	}
	?>
	<?php $a = 5; echo gettype($a); ?>
	<?php $b = 3; if(isset($b)){ echo "$b"; }?>
	<?php define("c",1); echo c; ?>
</body>
</html>