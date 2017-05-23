<?php
	// 8. Cho mảng [
	// ['name', => 'PHP', 'level' => 1, 'position' => 2],
	// ['name', => 'Java', 'level' => 1, 'position' => 1],
	// ['name', => 'Python', 'level' => 1, 'position' => 4],
	// ['name', => 'PHP 5.6', 'level' => 2, 'position' => 1],
	// ['name', => 'PHP 7', 'level' => 2, 'position' => 2],
	// ];

	// Viết chương trình hiển thị ra:
	// 	Java
	// 	PHP
	// 	|--PHP 5.6
	// 	|--PHP 7
	// 	Python

	//Foreach ra level 1
	//
	
	$arr = [
		['id' => 1, 'name' => 'PHP', 'position' => 2, 'parent_id'=>0],
		['id' => 2, 'name' => 'Java', 'position' => 1, 'parent_id'=>0],
		['id' => 3, 'name' => 'Python', 'position' => 4, 'parent_id'=>0],
		['id' => 4, 'name' => 'PHP 5.6', 'position' => 1, 'parent_id'=>1],
		['id' => 5, 'name' => 'PHP 7', 'position' => 2, 'parent_id'=>1],
		['id' => 6, 'name' => 'Java core', 'position' => 1, 'parent_id'=>2],
		['id' => 7, 'name' => 'Jav', 'position' => 1, 'parent_id'=>6],
		['id' => 8, 'name' => 'CI', 'position' => 1, 'parent_id'=>4],
		['id' => 11, 'name' => 'Database', 'position' => 2, 'parent_id'=>9],
		['id' => 9, 'name' => 'Shop Cart', 'position' => 1, 'parent_id'=>8],
		['id' => 10, 'name' => 'Input Form', 'position' => 2, 'parent_id'=>9]
	];

	// B1: Cần sắp xếp mảng theo position tăng dần 
	function sortArray($array)
	{
		$position = array();
		foreach ($array as $key5 => $val5) {
			$position[] = $val5['position'];	
		}
		array_multisort($position, $array);

		return $array;
	}

	function getChild($id, $arr, $level)
	{
		$prefix = array(
			1=>'--',
			2=>'---',
			3=>'----',
			4=>'-----',
			);
		foreach ($arr as $key0 => $val0) {
			if($val0['parent_id'] == $id)
			{
				echo $prefix[$level].$val0['name']."<br>";
				getChild($val0['id'],$arr,$level+1);
			}
		}
	}
	function menu($arr)
	{
		$arr = sortArray($arr);
		foreach ($arr as $key => $val) 
		{
			if($val['parent_id'] == 0)
			{
				echo $val['name']."<br>";
				getChild($val['id'], $arr, 1);
			}
		}
	}
	menu($arr);
	
?>