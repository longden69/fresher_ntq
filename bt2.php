<?php
	// Tính S(n) = 1^2 + 2^2 + 3^2 + ... + (n-1)^2 + n^2
	// Trường hợp suy biến: n = 1
	
		function tinhBinhPhuong($number)
		{
			if($number >= 0)
			{
				return $k = $number*$number;
			}
			else
				return;
		}

		function deQuy($number)
		{
			$s = 0;
			for($i = $number; $i>=0; $i--)
			{
				$s = $s + tinhBinhPhuong($i);
			}

			return $s;
		}
		if(isset($_GET['submitName']))
		{
			$number = $_GET['number'];
			$s = deQuy($number);
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tính S</title>
	</head>
	<body>
		<form method="get" action="">
			<table align="center">
				<tr>
					<td>Nhập số</td>
					<td><input type="number" value="<?php echo (isset($_GET['number']))?$_GET['number']:''; ?>" name="number"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submitName" value="Gửi">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<?php
							if(isset($s))
							{
								echo "Kết quả: <br>";
								echo $s;
							}
						?>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>