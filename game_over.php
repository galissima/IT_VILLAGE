<?php
$title = 'GameOver'; 
include('assets/includes/header.php');
?>
<link rel=stylesheet  type="text/css" href="assets/css/style.css">
<div class="gameover">	
<img src="assets/pics/game_over.png" alt="game_over" style="width:500px;height:300px; position: absolute; top: 170px; left: 100px;">

</div>
<a href="game.php" class="newgame">NewGame</a>
<a href="game.php" class="logout">LogOut</a>

<style>
body{
    background-image: url("assets/pics/background.png");
}
.newgame{
	 background-color: #008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
   position: absolute;
   top: 520px;
   left: 250px;

}
.logout{
     background-color: #008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
   position: absolute;
   top: 530px;
   right: 250px;

}


</style>