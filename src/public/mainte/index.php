<?php

require 'db_connection.php';

$sql = 'SELECT * FROM contacts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 1, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

$pdo->beginTransaction();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('id', 1, PDO::PARAM_INT);
    $stmt->execute();
} catch( PDOException $e) {
    $pdo->rollBack();
    echo 'Error: ' . $e->getMessage();
    exit;
}

$pdo->commit();