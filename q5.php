<html>
<body>
    <form method="POST">
        Enter name: <input type="text" name="name"/><br>
        Enter salary: <input type="number" name="salary"/><br>
        Enter position: <input type="text" name="pos"/><br>
        <input type="submit" name="submit"/><br>
    </form>

    <?php
    class Employee
    {
        public $name;
        public $salary;
        public $position;

    
        public function calcNetSal($salary)
        {
            $hra = 0.1 * $salary;
            $da = 0.5 * $salary;
            $netsal = $salary + $hra + $da;
            echo "Net salary is: $netsal";
        }
    }

    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $position = $_POST['pos'];
    }
    $obj1 = new Employee();

        echo "Name: $name <br>";
        echo "Salary: $salary <br>";
        echo "Position: $position <br>";

        $obj1->calcNetSal($salary);
    ?>
</body>
</html>
