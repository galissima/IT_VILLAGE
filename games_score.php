<?php
session_start();



// READ 

include('includes/header.php');
include('db_connection.php');
//READ ROWS FROM TABLE GAMES     SELECT * FROM `users` ORDER BY `user_current_score` DESC
$read_query = "SELECT * FROM `users` ORDER BY `user_sum_score` DESC ";
$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
	echo "<table border=1 >";
	echo "<tr><th>User name </th><th>Total Score</th>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		
			
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" .$row['user_sum_score'] . "</td>";
			
			
		echo "<tr>";

	}

	echo "</table>";
}


$user_id=$_SESSION['user_id'];


$read_query = "SELECT `game_id`, `game_score`,  `message` FROM `games` WHERE `user_id`= $user_id";
$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
	echo "<table border=1 >";
	echo "<tr><th>Game ID </th><th> Score</th><th> Mesaage</th>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		
			
			echo "<td>" . $row['game_id'] . "</td>";
			echo "<td>" .$row['game_score'] . "</td>";
			echo "<td>" .$row['message'] . "</td>";
			
			
		echo "<tr>";

	}

	echo "</table>";
}
?>
<a href="games_score.php" class="newgame" id="hover1">Klasaciq</a>
<a href="index.php" class="logout" id="hover2">LogOut</a>
<?php

