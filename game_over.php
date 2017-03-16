<?php
session_start();
$title = 'GameOver';
include('includes/header.php');
?>

<div class="gameover">	

<p id="game">GAME</p>
<p id="over">OVER</p>
<p id="score">SCORE: <?php echo $_SESSION['money'] ?> </p>
<p id="score">SCORE: <?php echo $_SESSION['result'] ?> </p>
</div>
<a href="scores.php" class="newgame">NewGame</a>
<a href="index.php" class="logout">LogOut</a>

<?php
include('includes/footer.php');
?>



