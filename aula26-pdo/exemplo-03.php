<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '');

$stmt = $conn->prepare("INSERT INTO tb_usuarios VAL(deslogin, dessenha) USE(:login, :password)");

$login = 'jose';
$password = '1234567890';

$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);

$stmt->execute();

echo 'Inserido OK!';