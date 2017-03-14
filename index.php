<?php
$title = 'Index';
include('assets/includes/header.php');
?>


<?php 
session_start();
// check
if (!empty($_POST['submit'])) {
	$_SESSION['user_name'] = $_POST['user_name'];
	echo "Hello, ".$_SESSION['username'];
	echo '<a href="register.php">next</a>';
} else {
	$_SESSION['count'] = rand(10,20);
// echo " Брой хвърляния: "  . $_SESSION['count']. "<br>";
	$_SESSION['money'] = rand(50,100);
// echo "Начална сума: " . $_SESSION['money'];
	
}
?>
<link rel=stylesheet  href="assets/css/style.css">
<div class="login">
<h3>Log in:</h3>
<form action="game.php" method="post">
	<p><input type="text" name="user_name" class="name">*</p>
	<p><input type="password" name="password" class="password">*</p>
	<!-- <input type="hidden" name="count" value="<?php echo $count?> "> -->
	<p><input type="submit" name="submit" value="login"></p>		
	</form>
</div>
<?php
include('assets/includes/footer.php');
?>
