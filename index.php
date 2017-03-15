<div class="login">
<h3>Log in:</h3>
<form action="" method="post">
	<p><input type="text" name="user_name" class="name" placeholder="Username">*</p>
	<p><input type="password" name="user_password" class="password" placeholder="Password">*</p>
	<p><input type="submit" name="submit" value="login"></p>		
	</form>
</div>



<?php
$title = 'Index';
include('assets/includes/header.php');
include('db_connection.php');

echo '<a href="register.php">REGISTER</a>';
session_start();
// check
if (!empty($_POST['submit'])) {
	$_SESSION['count'] = rand(10,20);
	$_SESSION['money'] = rand(50,100);
	$_SESSION['user_name'] = $_POST['user_name'];
	$_SESSION['user_password'] = $_POST['user_password'];
	echo "Hello, ".$_POST['user_name'];
	
}


//READ
$read_q = "SELECT `user_name`, `user_password` FROM `users` WHERE `date_deleted` IS NULL";
$i=0;
$result = mysqli_query($conn, $read_q);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
			$users[$i]= $row['user_name'] ;
			$password[$i]= $row['user_password'] ;
			$i++;
}
}
if (!empty($_POST['submit'])) {
		if (in_array($_SESSION['user_name'], $users) and in_array($_SESSION['user_password'], $password)) {
				header('Location: game.php');
		}
		else{
		echo "<br>INCORRECT USER OR PASSWORD" ;
		}
}
?>
 
   

<style type="text/css">
	body{
	background-image: url("assets/pics/background.png") ;
	background-image: no-repeat;
	}
	.login{
		width: 40%;
		height: 200px;
		position: relative;
		top: 140px;
		left: 550px;
	}
	.name, .password{
		width: 60%;
		height: 40px;

	}
</style>


<?php
include('assets/includes/footer.php');
?>