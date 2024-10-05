// db.php
$host = 'localhost';
$db = 'cricket_score';
$user = 'root';
$pass = '';

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
