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
