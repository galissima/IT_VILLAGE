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
<form action="game.php" method="post">
	username<input type="text" name="username">
	password<input type="password" name="password">
	<!-- <input type="hidden" name="count" value="<?php echo $count?> "> -->
	<input type="submit" name="submit" value="login">		
	</form>

<?php 

if (!empty($_POST['submit'])) {
	$_SESSION['user_name'] = $_POST['user_name'];
	echo "Hello, ".$_SESSION['user_name'];
	
} 
	
	echo '<br> <a href="register.php">REGISTER NOW</a>';
	


$_SESSION['count'] = rand(10,20);
$_SESSION['money'] = rand(50,100);



	?>
</body>
</html>
