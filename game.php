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
   

if ($_SESSION['temp']>20) {
	$_SESSION['temp']=$_SESSION['temp']-20;
}
echo "<br>" . $_SESSION['temp'] . "<br>";
$_SESSION['temp']=9;
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
		echo "Честито, купи хотел :)"; 
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
		$message=" зЕми тия 20 монети :)";
		break;
	case '9':
		$sel9=$select;


$qusts[1][1] = "kak se kazvam";
$qusts[1][2] ="mitko" ;
$qusts[1][3] = "kolio" ;
$qusts[1][4] = "correct" ;


$qusts[2][1] = "kak se kazva galq";
$qusts[2][2] ="mitko galq" ;
$qusts[2][3] = "kolio galq" ;
$qusts[2][4] = "correct" ;

$quest_rand = rand(1,2);
$quest_temp1 = rand(2,4);
$quest_temp2 = rand(2,4);
$quest_temp3 = rand(2,4);
?>

<div class="quest">
<p><?=   $qusts[$quest_rand][1]     ?>  </p>
<form method="get" action="">
<input type="radio" name="answer" value="<?php $qusts[$quest_rand][$quest_temp1]; ?>" > <?php echo  $qusts[$quest_rand][$quest_temp1]; ?> <br>
<input type="radio" name="answer" value="<?php $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
<input type="radio" name="answer" value=" <?php $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
<input type="submit" name="submit" value="answer">
</div>

<?php

if (!empty($_GET)) {
	if ($_GET['answer'] == $qusts[$quest_rand][4]) {
	echo "Great";
	}else{
	echo "Incorrect";
}
}

		$message=" зЕми тия 20 монети :)";
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
		$_SESSION['money']=$_SESSION['money']-5;
		$message=" току-що изгуби 5 монети :(";
		break;
	case '13':
		$sel13=$select;
		
		break;
	case '14':
		$sel14=$select;
		
		break;

	case '15':
		$sel15=$select;
		
		break;
	case '16':
		$sel16=$select;
		
		break;
	case '17':

		$sel17=$select;
		
		break;
	case '18':
		$sel18=$select;
		
		break;
	case '19':
		$sel19=$select;
		
		break;

	case '20':
		$sel20=$select;
		
		break;

}
?>

<form method="" action="">

<?php
if ($_SESSION['count']>0) {
?>
	<input type="submit" name="submit" value="submit" onclick="alert('<?php echo $message;  ?> ')">

<?php	}
	else{
		echo "GAME OVER!!";
		session_destroy();
	}
?>

</form>
<a href="logout.php">LOG OUT</a>
<div class="container" >
<div class="size div1">P</div>
<div class="size div2">I</div>
<div class="size div3">F</div>
<div class="size div4">S</div>
<div class="size div5">F</div>
<div class="size div6">V</div>
<div class="size div7">I</div>
<div class="size div8">F</div>
<div class="size div9">F</div>
<div class="size div10">I</div>
<div class="size div11">N</div>
<div class="size div12">P</div>
<div class="size div13">P</div>
<div class="size div14">P</div>
<div class="size div15">P</div>
<div class="size div16">P</div>
<div class="size div17">P</div>
<div class="size div18">P</div>
<div class="size div19">P</div>
<div class="size div20">P</div>
</div>

<?php
include('assets/includes/footer.php');
?>