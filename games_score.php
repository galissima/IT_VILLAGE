<?php


// READ 


include('db_connection.php');
//READ ROWS FROM TABLE GAMES
$read_query = "SELECT * FROM `games` JOIN `users` ON `games`.`game_id` = `users`.`user_id`";
$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
	echo "<table border=1>";
	echo "<tr><th>GAME_ID</th><th>USER_ID</th><th>GAME_SCORE</th>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		
			echo "<td>" . $row['game_id'] . "</td>";
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" .$row['game_score'] . "</td>";

	
		echo "<tr>";

	}
	echo "</table>";
}


include('db_connection.php');
//READ ROWS FROM TABLE GAMES
$read_query = "SELECT * FROM `users` WHERE `date_deleted` IS NULL"; 
$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
	echo "<table border=1>";
	echo "<tr><th>USER_ID</th><th>USER_NAME</th><th>USER_PASSWORD</th><th>USER_EMAILL</th><th>USER_CURRENT_SCORE</th>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		
			echo "<td>" . $row['user_id'] . "</td>";
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" .$row['user_password'] . "</td>";
			echo "<td>" .$row['user_email'] . "</td>";
			echo "<td>" .$row['user_current_score'] . "</td>";

	
		echo "<tr>";

	}
	echo "</table>";

}
session_start();
if (!empty ($_SESSION['money'])) {
	$_SESSION['user_result']= $_SESSION['money'] + $_SESSION['user_current_score'];
	echo 'Result of ' . $_SESSION['user_name'] . ' is '. $_SESSION['user_result'];
}

// $substance_id	= $_GET['substance_id'];
// 	$date = date('Y-m-d');
	$update_query = "SELECT * FROM `users` ORDER BY `user_current_score` DESC";
	$result = mysqli_query($conn, $update_query);
	// if ($result) {
	// 	return header('Location: games_score.php');  
	// } else {
	// echo "Error: " . $update_query . " - " . mysqli_error($conn);
	// }