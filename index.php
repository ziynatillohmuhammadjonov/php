<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <h1>OOP</h1>
    <?php
    interface Human
    {
        public function talk();
        public function walk();
    }
    interface Mutant
    {
        public function fly();
    }
    class Person implements Human, Mutant
    {
        function talk()
        {
            print 'Odam gapirayapti <br>';
        }
        function walk()
        {
            print 'Odam yurayapti <br>';
        }
        function fly()
        {
            print 'U ucha oladi ham <br>';
        }
    }

    $bob = new Person();
    $bob->talk();
    $bob->walk();
    $bob->fly();

    // Treydi 
    trait PrintSome
    {
        public function hello()
        {
            print 'Hello world <br>';
        }
        public function by()
        {
            print 'By by... <br>';
        }
    }

    class World
    {
        use PrintSome;
    }


    $obj = new World();
    $obj->hello();
    $obj->by();

    abstract class Car
    {
        protected $name;
        protected $color;

        abstract protected function showInfo();
    }

    class BMW extends Car
    {
        function __construct($name)
        {
            $this->name = $name;


            $this->showInfo();
        }
        function showInfo()
        {
            echo 'Moshina nomi: ' . $this->name;
        }
    }

    $x5 = new BMW('X5');
    ?>
    <?php include('footer.php'); ?>
</body>

</html>