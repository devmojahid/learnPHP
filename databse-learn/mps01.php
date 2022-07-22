<?php 
define("DB_HOST","127.0.0.1");
define("DB_NAME","bank_final");
// define("DB_TABLE","task");
define("DB_USER","root");
define("DB_PASS","");

$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bank_final;charset=UTF8;",'root','');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM customer WHERE city=?");

$stmt->execute(['salem']);
// print_r($stmt->fetchAll(PDO::FETCH_KEY_PAIR));
