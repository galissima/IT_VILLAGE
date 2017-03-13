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
	echo "Hello, ".$_SESSION['username'];
	echo '<a href="register.php">next</a>';
} else {
	$_SESSION['count'] = rand(10,20);
echo " Брой хвърляния: "  . $_SESSION['count']. "<br>";
	$_SESSION['money'] = rand(50,100);
echo "Начална сума: " . $_SESSION['money'];
	
	
}


	?>
</body>
</html>
