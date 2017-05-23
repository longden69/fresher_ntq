<?php
	$array = array();
	$n = rand(0,100);
	for($i = 0; $i<$n; $i++){
		$array[$i] = rand();
	}
	print_r($array);
	echo "<br>";
	for($i = 0; $i<$n; $i++){
		$temp = $array[$i];
		$array[$i] = $array[$n-$i-1];
		$array[$n-$i-1] = $temp;
	}
	print_r($array);
	echo "<br>";
	$keySearch = "KAKAKAKKAAKAKAKKA\KA%_ ";
	echo addcslashes($keySearch, '%_');
?>
<!DOCTYPE html>
<html>
<head>
	<title>az</title>
</head>
<body>
<form action="index_submit" method="get" accept-charset="utf-8">
	<input type="file" name="">
	<input type="submit" name="">
</form>
<br>
<video style="width : 25%;" src="https://s3-ap-northeast-1.amazonaws.com/iryoo-dev-input/temp/BWLfSiVk8AW8V8kVUs0o1hE0Ub8nCjl2pDQqC3Ri.mp4" controls></video>
</body>
</html>