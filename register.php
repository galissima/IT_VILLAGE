<?php
$title = 'Register'; 
include('assets/includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
<div class="register">
<h3>Register now:<h3>
<form method="post" action="">
<br>
	<p><input type="name" name="user_name" placeholder="username" class="name">* <p>
	<p><input type="password" name="user_password" placeholder="password" class="password">* <p>
	<p><input type="email" name="user_email" placeholder="email" class="email">* <p>
	<p><input type="submit" name="submit" value="register" class="submit"><p>
</form>
</div>

<?php 
include('db_connection.php');

// session_start();


if (!empty($_POST)) {
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	$user_email = $_POST['user_email'];

	$insert_query="INSERT INTO `users`( `user_name`, `user_password`, `user_email`) VALUES ('$user_name','$user_password', '$user_email')";
	if (mysqli_query($conn, $insert_query)) {
		echo "New record created successfully";
		header('Location: index.php');
	} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $insert_query . " - " . mysqli_error($conn);
	}
}
?>
<!-- <a href="login2.php">next</a> -->

<style type="text/css">
	body{
	background-image: url("assets/pics/background.png") ;
	background-image: no-repeat;
	}
	.register{
		width: 40%;
		height: 200px;
		position: relative;
		top: 50px;
		left: 550px;
	}
	.name, .password, .email{
		width: 60%;
		height: 40px;
	}
</style>
<div class="register">
<h3>Register now:<h3>
<form method="post" action="">
<br>
	<p><input type="name" name="user_name" placeholder="username" class="name">* <p>
	<p><input type="text" name="user_password" placeholder="password" class="password">* <p>
	<p><input type="email" name="user_email" placeholder="email" class="email">* <p>
	<p><input type="submit" name="submit" value="register" class="submit"><p>
</form>
</div>
<?php
include('assets/includes/footer.php');
?>