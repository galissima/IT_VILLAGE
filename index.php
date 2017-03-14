<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
<form action="" method="post">
	username<input type="text" name="user_name" value="" placeholder="user">
	password<input type="password" name="password" value="">
	<!-- <input type="hidden" name="count" value="<?php echo $count?> "> -->
	<input type="submit" name="submit" value="login">		
	</form>

<?php 
include('db_connection.php');
if (!empty($_POST['submit'])) {
	$_SESSION['user_name'] = $_POST['user_name'];
	echo "Hello, ".$_SESSION['user_name'];
} 
	
	echo '<br> <a href="register.php">REGISTER NOW</a>';

$_SESSION['count'] = rand(10,20);
$_SESSION['money'] = rand(50,100);

$read_q = "SELECT * FROM `users` WHERE `date_deleted` IS NULL";
$result = mysqli_query($conn, $read_q);

$i=0;
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
			$array[$i] = $row['user_name'];
			$i++;		
			}
}

if (in_array($_SESSION['user_name'], $array)) {
	
	//header('Location: game.php');
}
else{
	echo "<br>molq registrirai se ". $_SESSION['user_name'] . " takuv";
}



	?>
</body>
</html>
