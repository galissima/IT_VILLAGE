<?php
$title = 'GameOver'; 
include('assets/includes/header.php');
?>
<link rel=stylesheet  type="text/css" href="assets/css/style.css">
<div class="gameover">	

<p id="game">GAME</p>
<p id="over">OVER</p>
<p id="score">SCORE:5345coins</p>

</div>
<a href="game.php" class="newgame">NewGame</a>
<a href="index.php" class="logout">LogOut</a>

<style>
body{
    background-image: url("assets/pics/background.png");
}
.newgame{
	 background-color: #696;
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
     background-color: #696;
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
.gameover{
    position: relative;
    top: 20px;
    width: 80%;
    height: 500px;
   

}

#game {
    color: #696;
    font-size: 200px;
    display: inline-block;
    width: 5px;
    margin-left: 30px;
    position: absolute;
    left: 100px;
    top: -150px;
    transform: rotate(-5deg);}
#over {
    color: #696;
    font-size: 200px;
    display: inline-block;
    width: 5px;
    margin-left: 30px;
    position: absolute;
    left: 200px;
    top: -50px;
    transform: rotate(-5deg);}
 #score {
    color: #696;
    font-size: 70px;
    display: inline-block;
    width: 5px;
    margin-left: 30px;
    position: absolute;
    left: 400px;
    top: 300px;
    /*transform: rotate(-5deg);}*/

</style>