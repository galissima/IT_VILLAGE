<?php
session_start();
$title = 'GameOver';
include('includes/header.php');
?>

<div class="gameover">	

<p id="game">GAME</p>
<p id="over">OVER</p>
 <p id="score">SCORE: <?php echo $_SESSION['money'] ?> </p> 
<p id="score_text">SCORE: <?php echo $_SESSION['result'] ?> </p> -->
</div>
<a href="games_score.php" class="newgame" id="hover1">NewGame</a>
<a href="index.php" class="logout" id="hover2">LogOut</a>

<?php
include('includes/footer.php');
?>



