<?php
	// 6. Tìm ước chung lớn nhất của một mảng các số nguyên dương. VD: [100, 40, 25] 
	//
	$arr = array(100, 4, 20);
	function timUoc($num)
	{
		$uocSo = array();
		for ($i=1; $i <= sqrt($num); $i++) { 
			if($num % $i == 0)
			{
				$uocSo[] = $i;
				$uocSo[] = $num/$i;
			}
		}

		return $uocSo;
	}
	 foreach ($arr as $key => $val) {
	 	$listUocSo[$key] = timUoc($val);
	 }

	 // $arr = timUoc(100);
	 // print_r($arr);

	 var_dump($listUocSo[0]);
	 echo "<br>";
	 var_dump($listUocSo[1]);
	 echo "<br>";
	 var_dump($listUocSo[2]);
	 echo "<br>";
?>