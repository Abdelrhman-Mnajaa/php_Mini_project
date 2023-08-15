<?php

$host='localhost';
$username='Abd';
$password='123456';
$dbname='php_mini';



// set DSN
$dsn="mysql:host=".$host.";dbname=".$dbname;

// set PDO

$pdo=new PDO($dsn,$username,$password);

$stmt=$pdo->query('SELECT * FROM user');

$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
    // $rows=$row;

// foreach($row as $i)
// print_r($i);
// var_dump($row);

