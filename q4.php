<html>
<body>
	<form method="POST">
		Enter 1st number: <input type="number" name="num1"/>
		<br>
		Enter 2nd number: <input type="number" name="num2"/>
		<br>
		<input type="submit" name="submit"/>
		<br>
	</form>

	<?php
	class Math
	{

	public $num1;
	public $num2;

	static function add($num1,$num2)
	{
		$sum = $num1 + $num2;
		echo "Sum is: $sum";
	}

	static function sub($num1,$num2)
	{
		$sub = $num1 - $num2;
		echo "Subtraction is:$sub";
	}

	static function mul($num1,$num2)
	{
		$mul = $num1 * $num2;
		echo "Multiplication is:$mul";
	}

	static function div($num1,$num2)
	{
		$div = $num1 / $num2;
		echo "Division is:$div";
	}
}

if(isset($_POST['submit']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
}

$obj1 = new Math();
$obj1->add($num1,$num2);
echo "<br>";
$obj1->sub($num1,$num2);
echo "<br>";
$obj1->mul($num1,$num2);
echo "<br>";
$obj1->div($num1,$num2);
?>
</body>
</html>