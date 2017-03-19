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
<p id="score_text"> <?php echo $_SESSION['result'] ?> </p> 
</div>
<a href="games_score.php" class="newgame" id="hover1">Rating</a>
<a href="index.php" class="logout" id="hover2">LogOut</a>

<?php
$user_name=$_SESSION['user_name'];
$user_money=$_SESSION['money'];
$user_message=$_SESSION['result'];



$read_q ="SELECT `user_id` FROM `users` WHERE `user_name`= '$user_name' ";
$result = mysqli_query($conn, $read_q);
$row = mysqli_fetch_assoc($result);
$user_id = $row['user_id'];




$read_query ="SELECT `user_sum_score` FROM `users` WHERE `user_name`= '$user_name'";
$result = mysqli_query($conn, $read_query);
$row = mysqli_fetch_assoc($result);


	 $user_result= $_SESSION['money'] + $row['user_sum_score'];



$update_query = "UPDATE `users` SET`user_sum_score`= $user_result WHERE `user_name`= '$user_name' ";
$result = mysqli_query($conn, $update_query);

	if ($result) {
		 
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);
	}


//insert



$insert_query ="INSERT INTO `games`( `game_score`, `user_id`, `message`) VALUES ($user_money,$user_id,'$user_message')";
$result = mysqli_query($conn, $read_query);
$row = mysqli_fetch_assoc($result);


$result = mysqli_query($conn, $insert_query);

	if ($result) {
		
	} else {
	echo "Error: " . $insert_query . " - " . mysqli_error($conn);
	}


$_SESSION['user_id'] = $user_id ;

include('includes/footer.php');
?>



