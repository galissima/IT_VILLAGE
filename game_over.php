<?php
session_start();
$title = 'GameOver';
include('assets/includes/header.php');
?>

<div class="gameover">	

<p id="game">GAME</p>
<p id="over">OVER</p>
<p id="score">SCORE: <?php echo $_SESSION['money'] ?> </p>

</div>
<a href="game.php" class="newgame">NewGame</a>
<a href="index.php" class="logout">LogOut</a>

<?php
include('assets/includes/footer.php');
?>



