<?php	
$title = 'Game';
include('assets/includes/header.php');
 
session_start();
$select= "border: 4px solid red;"; 
$_SESSION['count']=$_SESSION['count']-1;

echo "Брой хвърляния:" . $_SESSION['count'] . "<br>" ;
echo "Текуща сума: " . $_SESSION['money'] ." Монети ";

$rand=rand(1,6);

echo "<br>Зарче: " . $rand . "<br>";

echo $_SESSION['temp'] . "<br>";
$_SESSION['temp'] = $_SESSION['temp'] + $rand;
echo $_SESSION['temp'];
   

$qusts[1][0] = "kak se kazvam";
$qusts[1][1] ="mitko" ;
$qusts[1][2] = "kolio" ;
$qusts[1][3] = "correct" ;


$qusts[2][0] = "kak se kazva galq";
$qusts[2][1] ="mitko galq" ;
$qusts[2][2] = "kolio galq" ;
$qusts[2][3] = "correct galq" ;


if ($_SESSION['temp']>20) {
	$_SESSION['temp']=$_SESSION['temp']-20;
}
echo "<br>" . $_SESSION['temp'] . "<br>";

switch ($_SESSION['temp']) {
	case '1':
		$sel1=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="току-що изгуби 5 монети :(";
		break;
	case '2':
		$sel2=$select;
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		$message="Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
			$message="Нощувка - 10 лв";
		}
		break;
	case '3':
		$sel3=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '4':
		$sel4=$select;
		$_SESSION['count']=$_SESSION['count']-2;
		$message=" Wi-Fi - я ГРЪМНА!!! Губиш 2 хода :(" ;
		break;
	case '5':
		$sel5=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '6':
		$sel6=$select;
		$_SESSION['money']=$_SESSION['money']*10;
		$message="УАУ!Вашата сума се умножава по 10!!! :)";
		break;
	case '7':
		$sel7=$select;
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		$message="Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
		}
		break;
	case '8':
		$sel8=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '9':
		$sel9=$select;

$message="ФОРМА !!!!!!!!!!!";
$quest_rand = rand(1,2);
$quest_temp = rand(1,3);
switch ($quest_temp) {
	case '1':
	$quest_temp1=1;
	$quest_temp2=2;
	$quest_temp3=3;
		break;
	case '2':
	$quest_temp1=3;
	$quest_temp2=2;
	$quest_temp3=1;
		break;
	case '3':
	$quest_temp1=2;
	$quest_temp2=3;
	$quest_temp3=1;
		break;
}
?>
<div class="quest">
<p><?=   $qusts[$quest_rand][0]     ?>  </p>
<form method="post" action="">
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp1]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp1]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
  <input type="submit" name="submit" value="answer" onclick="alert('<?php echo $message;  ?> ')">
</div>
<?php
if (!empty($_POST)) {
	if ($_POST['answer'] == $qusts[$quest_rand][3]) {
		echo "Great";
		$_SESSION['count']=$_SESSION['count']+20;
		$_SESSION['money']=$_SESSION['money']+400;
	}else{
		echo "Incorrect";
		$_SESSION['money']=$_SESSION['money']-50;
	}
}
		
		$message="ФОРМА !!!!!!!!!!!";
		break;
	case '10':
		$sel10=$select;
		if ($_SESSION['money']>100) {
		$_SESSION['money']=$_SESSION['money']-100;
		$message="Честито, купи хотел :)"; 
		}else{
			$_SESSION['money']=$_SESSION['money']-10;
		}
		
		break;
	case '11':
		$sel11=$select;
		$message="Брао, бе! WINNER!!! :)";
		session_destroy();
		break;
	case '12':
		$sel12=$select;
		$_SESSION['count']=$_SESSION['count']-5;
		$message=" Задържан сте за кражба на Wi-Fi :(" ;
		break;
	case '13':
		$sel13=$select;
$message="ФОРМА !!!!!!!!!!!";
$quest_rand = rand(1,2);
$quest_temp = rand(1,3);
switch ($quest_temp) {
	case '1':
	$quest_temp1=1;
	$quest_temp2=2;
	$quest_temp3=3;
		break;
	case '2':
	$quest_temp1=3;
	$quest_temp2=2;
	$quest_temp3=1;
		break;
	case '3':
	$quest_temp1=2;
	$quest_temp2=3;
	$quest_temp3=1;
		break;
}
?>
<div class="quest">
<p><?=   $qusts[$quest_rand][0]     ?>  </p>
<form method="post" action="">
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp1]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp1]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
  <input type="submit" name="submit" value="answer" onclick="alert('<?php echo $message;  ?> ')">
</div>
<?php
if (!empty($_POST)) {

	if ($_POST['answer'] == $qusts[$quest_rand][3]) {
		echo "Great";
		$_SESSION['count']=$_SESSION['count']+20;
		$_SESSION['money']=$_SESSION['money']+400;
	}else{
		echo "Incorrect";
		$_SESSION['money']=$_SESSION['money']-50;
	}
}
		
		$message="ФОРМА !!!!!!!!!!!";
		break;
	case '14':
		$sel14=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="току-що изгуби 5 монети :(";
		break;

	case '15':
		$sel15=$select;
		$_SESSION['money']=$_SESSION['money']-100;
		$message=" Ти беше захапан от Троянски Кон - 100 монети надоло!";
		break;
	case '16':
		$sel16=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		
		break;
	case '17':
		$sel17=$select;
		$_SESSION['count']=$_SESSION['count']-7;
		$message=" Задържан сте за кражба  ГОЛЯМА на Wi-Fi :(" ;
		break;
	case '18':
		$sel18=$select;
		$_SESSION['count']=$_SESSION['count']+20;
		$message="Турбо тежим 20 хвърляния бонус" ;
		
		break;
	case '19':
		$sel19=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="току-що изгуби 5 монети :(";
		break;

	case '20':
		$sel20=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		
		break;

}


if ($_SESSION['money'] <= 0 || $_SESSION['count'] <= 0  ) {
	header('Location: game_over.php');
}

?>



<style type="text/css">

.quest{
	width: 30%;
	height: 200px;
	/*background-color: green;*/
	position: absolute;
	top: 280;
	left: 480px;
}
	.container{
	position: relative;
	width: 1000px;
	height: 500px;
	top: 10px;
	left: 250px;
	}
	div{
		position: absolute;
		top: 0;
	}
	
	.size{
		height: 100px;
		width: 100px;
		border: 4px solid black;
	}

	.div1{
	background-image: url('assets/pics/beer.png');
	<?php echo $sel1;?>
	}
	.div2{
		background-image: url('assets/pics/hotel.png');
		left: 110px;<?php echo $sel2;?>
	
	}
	.div3{
		background-image: url('assets/pics/coins.png');
		left: 220px;<?php echo $sel3;?>
	}
	.div4{
		background-image: url('assets/pics/storm.png');
		left: 330px;<?php echo $sel4;?>
	}
	.div5{
		background-image: url('assets/pics/coins.png');
		
		left: 440px;<?php echo $sel5;?>
	}
	.div6{
	
	left: 550px;
	background-image: url('assets/pics/diamond.png');
	<?php echo $sel6;?>
	}
	.div7{
	background-image: url('assets/pics/hotel.png');
	
	left: 660px;<?php echo $sel7;?>
	}
	.div8{
		background-image: url('assets/pics/coins.png');
	
	left: 770px;<?php echo $sel8;?>
	}
	.div9{
		background-image: url('assets/pics/quest.png');
	top:  110px;
	left: 770px;<?php echo $sel9;?>
	}
	.div10{
	background-image: url('assets/pics/hotel.png');
	top: 220px;
	left: 770px;<?php echo $sel10;?>
	}
	.div11{
	background-image: url('assets/pics/winner.png');
	left: 770px;
	top: 330px;<?php echo $sel11;?>
	
	}
	.div12{
	background-image: url('assets/pics/prison.png');
	top: 330px;
	left: 660px;<?php echo $sel12;?>
	}
	.div13{
	background-image: url('assets/pics/quest.png');
	top: 330px;
	left: 550px;<?php echo $sel13;?>
	}
	.div14{
	background-image: url('assets/pics/beer.png');
	top: 330px;
	left: 440px;<?php echo $sel14;?>
	}
	.div15{
	background-image: url('assets/pics/horse.png');
	top: 330px;
	left: 330px;<?php echo $sel15;?>
	}
	.div16{
	background-image: url('assets/pics/coins.png');
	top: 330px;
	left: 220px;<?php echo $sel16;?>
	}
	.div17{
	background-image: url('assets/pics/prison.png');
	top: 330px;
	left: 110px;<?php echo $sel17;?>
	}
	.div18{
	background-image: url('assets/pics/turbo.png');
	top: 330px;
	left: 0px;<?php echo $sel18;?>
	}
	.div19{
	background-image: url('assets/pics/beer.png');
	top: 220px;
	left: 0px;<?php echo $sel19;?>
	}
	.div20{
	background-image: url('assets/pics/coins.png');
	top: 110px;
	left: 0px;<?php echo $sel20;?>
	}



</style>
<form method="" action="">


	<input type="submit" name="submit" value="submit" onclick="alert('<?php echo $message;  ?> ')">

</form>
<a href="logout.php">LOG OUT</a>
<div class="container" >
<div class="size div1">B</div>
<div class="size div2">H</div>
<div class="size div3">C</div>
<div class="size div4">S</div>
<div class="size div5">C</div>
<div class="size div6">D</div>
<div class="size div7">H</div>
<div class="size div8">C</div>
<div class="size div9">Q</div>
<div class="size div10">H</div>
<div class="size div11">W</div>
<div class="size div12">P</div>
<div class="size div13">Q</div>
<div class="size div14">B</div>
<div class="size div15">T</div>
<div class="size div16">C</div>
<div class="size div17">P</div>
<div class="size div18">T</div>
<div class="size div19">B</div>
<div class="size div20">C</div>
</div>
<?php
include('assets/includes/footer.php');
?>