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
</body>
</html>