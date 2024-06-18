<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require ('header.php'); ?>
    <h1>OOP</h1>
    <?php
    $user = 'root';
    $password= '';
    $db='testing';
    $host='localhost';

    $dns ='mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dns, $user, $password);


    $query = $pdo->query('SELECT * FROM `users` ORDER BY `name` LIMIT 2');
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
       print('<h3>Roli</h3>'.$row['login'].'<br>Ismi: '.$row['name']);
    }
    echo'<br>';
    echo'<br>';
    echo'<br>';
    $id=1;
    $name='Ziynatilloh';
    $sql= 'SELECT  `name`, `id`, `email` FROM `users` WHERE `name`= :name && `id`= :id';// ?- buni o'rniga :name ko'rinishida qo'yishi mumkin.
    $query= $pdo->prepare($sql);
    $query->execute(['name'=>$name, 'id'=>$id]);
    
    $user= $query->fetch(PDO::FETCH_OBJ);
    print_r($user);
    ?>

    
    <?php include ('footer.php'); ?>
</body>

</html>