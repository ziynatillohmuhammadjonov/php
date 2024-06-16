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
    class Car
    {
        protected $speed;
        protected $wheels;
        protected $color;

        function __construct($speed, $color)
        {
            $this->speed = $speed;
            $this->color = $color;
        }
    }

    class BMW extends Car
    {
        private $model;
        function __construct($speed, $color, $model)
        {
            parent::__construct($speed, $color);
            $this->model = $model;
            $this->showInfo();
        }
        function showInfo()
        {
            print 'Model: ' . $this->model . ' Tezlik: ' . $this->speed . ' Rangi: ' . $this->color . '<br>';
        }
    }
    $m3 = new BMW(250, 'Qora', 'M3');
    ?>
    <?php include('footer.php'); ?>
</body>

</html>