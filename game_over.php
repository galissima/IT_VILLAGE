<?php
session_start();
$title = 'GameOver';
include('includes/header.php');
include('db_connection.php');
?>

<div class="gameover">	

<p id="game">GAME</p>
<p id="over">OVER</p>
 <p id="score">SCORE: <?php echo $_SESSION['money'] ?> </p> 
<p id="score_text">SCORE: <?php echo $_SESSION['result'] ?> </p> -->
</div>
<a href="games_score.php" class="newgame" id="hover1">NewGame</a>
<a href="index.php" class="logout" id="hover2">LogOut</a>

<?php
include('includes/footer.php');

$read_query ="SELECT `game_score` FROM `games` WHERE `user_id`= 2";
$result = mysqli_query($conn, $read_query);
$row = mysqli_fetch_assoc($result);
echo $row['game_score'];

	 $user_result= $_SESSION['money'] + $row['game_score'];
echo" " . $_SESSION['user_result'] . "---";


$update_query = "UPDATE `games` SET`game_score`= $user_result WHERE `user_id` = $_SESSION['user_name'] ";


$result = mysqli_query($conn, $update_query);

	if ($result) {
		echo "brao";  
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);
	}





?>



