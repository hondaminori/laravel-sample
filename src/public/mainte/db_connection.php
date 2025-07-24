<?php

use Illuminate\Container\Attributes\DB;

const DB_HOST = 'pgsql:host=db;dbname=laravel';
const DB_USER = 'laravel';
const DB_PASSWORD = 'secret';

try { 
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo 'Connection successful!' . "\n";
 } catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage() . "\n";
    exit;
}

