<?php

$conn = new PDO('mysql:dbname=dbphp7;host=localhost', 'root', '');

$conn->beginTransaction();

$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = ?');

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack(); CANCELOU O DELETE/OPERAÇÂO.

$conn->commit(); // CONFIRMOU O DELETE/OPERAÇÂO.

echo 'Delete OK!';