<?php


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
?>
<a href="games_score.php" class="newgame" id="hover1">Klasaciq</a>
<a href="index.php" class="logout" id="hover2">LogOut</a>
<?php


// include('db_connection.php');
// //READ ROWS FROM TABLE GAMES
// $read_query = "SELECT * FROM `users` WHERE `date_deleted` IS NULL"; 
// $result = mysqli_query($conn, $read_query);


// if (mysqli_num_rows($result) > 0) {
// 	echo "<table border=1>";
// 	echo "<tr><th>USER_ID</th><th>USER_NAME</th><th>USER_PASSWORD</th><th>USER_EMAILL</th><th>USER_CURRENT_SCORE</th>";
// 	while ($row = mysqli_fetch_assoc($result)) {
// 		echo "<tr>";
		
// 			echo "<td>" . $row['user_id'] . "</td>";
// 			echo "<td>" . $row['user_name'] . "</td>";
// 			echo "<td>" .$row['user_password'] . "</td>";
// 			echo "<td>" .$row['user_email'] . "</td>";
// 			echo "<td>" .$row['user_current_score'] . "</td>";

	
// 		echo "<tr>";

// 	}
// 	echo "</table>";

//}










	//$update_query = "SELECT * FROM `users` ORDER BY `user_current_score` DESC";
	//$result = mysqli_query($conn, $update_query);
	// if ($result) {
	// 	return header('Location: games_score.php');  
	// } else {
	// echo "Error: " . $update_query . " - " . mysqli_error($conn);
	// }