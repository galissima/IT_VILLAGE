<?php 

include('db_connection.php');
//CREATE ROWS IN TABLE CITIES
?>

<form method="post" action="games_create_delete.php.">
	<input type="text" name="game_score">
	<input type="submit" name="submit" value="запиши">	
</form>

<?php 
if (isset($_POST['game_score'])) {
	$game_score = $_POST['game_score'];
	$insert_query = "INSERT INTO `games`(`game_score`) VALUES ('$game_score')";
	if (mysqli_query($conn, $insert_query)) {
		echo "New record created successfully";
	} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $insert_query . " - " . mysqli_error($conn);
	}
}

echo "<a href='read_duration.php'>read_duration</a>";


// READ 


// include('db_connection.php');
// //READ ROWS FROM TABLE CITIES
// $read_query = "SELECT * FROM `durations` WHERE `date_deleted` IS NULL";
// $result = mysqli_query($conn, $read_query);
// if (mysqli_num_rows($result) > 0) {
// 	echo "<table border=1>";
// 	echo "<tr><td>DURATION</td><td>UPDATE</td><td>DELETE</td></tr>";
// 	while($row = mysqli_fetch_assoc($result)){
		
// 			echo "<tr>";	
				
// 				echo "<td>" . $row['duration'] . "</td>";
// 				echo "<td><a href='update_duration.php ?duration_id=" .$row['duration_id'] . "'>update</a></td>";
// 				echo "<td><a href='deleted_duration.php?duration_id=" .$row['duration_id'] . "'>delete</a></td>";
				
// 						echo "</tr>";
			
// 	}
// 	echo "</table>";
// } else {
// 		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
// 	//echo "Error: " . $read_query . " - " . mysqli_error($conn);
// 	echo "Nothing found!";
	
// }
// echo "<a href='create_duration.php'>create_duration</a>";
