<?php

$connect = new PDO('mysql:host=localhost; dbname=ajax','root','');

$date = [
    "title" => $_POST['title'],
    "content"=> $_POST['content']
];

$sql ='INSERT INTO `post` (title, content) VALUES (:title, :content)';

    $statement = $connect->prepare($sql);
    $result = $statement->execute($date);
 