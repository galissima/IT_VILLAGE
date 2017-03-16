<?php
$title = 'Register'; 
include('assets/includes/header.php');
?>

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


<?php
include('assets/includes/footer.php');
?>