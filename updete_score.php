// update_score.php
include 'db.php';

$match_id = $_POST['match_id'];
$player_id = $_POST['player_id'];
$runs = $_POST['runs'];
$balls_faced = $_POST['balls_faced'];
$wickets = $_POST['wickets'];

$stmt = $pdo->prepare("INSERT INTO scores (match_id, player_id, runs, balls_faced, wickets) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$match_id, $player_id, $runs, $balls_faced, $wickets]);
