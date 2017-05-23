<?php
	// Cho số nguyên dương n, in ra các số nguyên tố nhỏ hơn n.
	// Trường hợp suy biến: n = 2.
	function kiemTraSoNT($number)
	{
		for($i = 2; $i <= sqrt($number); $i++)
		{
			if($number % $i == 0)
			{
				return false;
			}
		}

		return true;
	}

	function soNT($number)
	{
		$arr = array();
		for($i = $number; $i >= 2; $i--)
		{
			if(kiemTraSoNT($i))
				$arr[] = $i;
		}

		return $arr;
	}
	if(isset($_GET['submitName']))
	{
		$number = $_GET['number'];
		$listNumber = soNT($number);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>cho số nguyên dương n, in ra các số nguyên tố nhỏ hơn n.</title>
	</head>
	<body>
		<form action="" method="Get">
			<table align="center" class="">
				<tr>
					<td>Nhập số</td>
					<td><input type="number" value="<?php echo (isset($_GET['number']))?$_GET['number']:''; ?>" name="number"></td>
				</tr>
				<tr>
					<td colspan="2" align="center" >
						<input type="submit" name="submitName" value="Gửi">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<?php
							if(isset($listNumber))
							{
								echo "Dãy số nguyên tố : <br>";
								foreach ($listNumber as $key2 => $val2) {
									echo $val2." ";
								}
							}
						?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>