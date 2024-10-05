// fetch_matches.php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM matches");
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($matches);
