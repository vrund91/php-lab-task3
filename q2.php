<html>
<body>
	<form method="POST">
		Enter car brand: <input type="text" name="brand"/>
		<br>
		Enter car model: <input type="text" name="model"/>
		<br>
		Enter car year: <input type="number" name="year"/>
		<br>
		<input type="submit" name="submit"/>
		<br>
	</form>

	<?php

	 class vehicle
	 {
	 	public $brand;
	 	public $model;
	 	public $year;

	 	function print($brand,$model,$year)
	 	{
	 		echo $brand;
	 		echo "<br>";
	 		echo $model;
	 		echo "<br>";
	 		echo $year;
	 		echo "<br>";
	 	
	 	}
	 }
	 if(isset($_POST['submit']))
	 {
	 	$brand = $_POST['brand'];
	 	$model = $_POST['model'];
	 	$year = $_POST['year'];
	 }

	 $obj1 = new vehicle();
	 $obj1->print($brand,$model,$year);
	 ?>
	</body>
	</html>