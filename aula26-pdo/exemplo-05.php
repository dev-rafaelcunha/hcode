<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '');

$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = :id');

$id = 1;

$stmt->bindParam(':id', $id);

$stmt->execute();

echo 'Delete OK!';