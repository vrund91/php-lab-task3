<html>
<body>
	<form method="POST">
		Enter length of Rectangle:<input type="number" name="num1"/><br><br>
		Enter Width of Rectangle:<input type="number" name="num2"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	class Rectangle
	{
		public $length;
		public $width;

		function calcuRect($length,$width)
		{
			$area = $length * $width;
			echo "Area of Rectangle is: $area";
			echo "<br>";

			$peri = ($length + $width)*2;
			echo "perimeter of Rectangle is: $peri";
			echo "<br>";
		}
		
	}
	if(isset($_POST['submit']))
	{
		$length=$_POST['num1'];
		$width=$_POST['num2'];
	}
	$obj1 = new Rectangle();
	$obj1 -> calcuRect($length,$width);
	?>
</body>
</html>