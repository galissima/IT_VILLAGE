<?php	
$title = 'Game';
include('includes/header.php');
include('includes/quest.php');
session_start();


if (!empty($_POST['answer'])) {

	if ($_POST['answer'] ==  $_POST['correct_answer']) {
		
		$_SESSION['count']=$_SESSION['count']+20;
		$_SESSION['money']=$_SESSION['money']+400;
		?><div class="answer"><b>Верен Отговор!!!<br> Получаваш 20 хвърляния и 400 монети ;)</b></div><?php
	}else{
		$_POST['answer'];
		$_SESSION['money']=$_SESSION['money']-50; 
		?><div class="answer"><b>Грешен отговор!!!<br> Губиш 50 монети ;(</b></div><?php
	}
	unset($_POST);
	 $_SESSION['answer_check']=3;
} 
elseif ($_SESSION['answer_check']==2) {
?><div class="answer"><b>Няма посочен отговор ;(</b></div><?php
	 $_SESSION['answer_check']=3;
}


$select= "border: 4px solid red;"; 
$_SESSION['count']=$_SESSION['count']-1;
?>
<div class="count"> Брой хвърляния: <?php echo $_SESSION['count'] . "<br>" ;?> </div>
<div class="current_sum"> Tекуща сума: <?php echo $_SESSION['money'] .  " монети ";?> </div>

<?php
$rand=rand(1,6);

$_SESSION['temp'] = $_SESSION['temp'] + $rand;
// echo '<div class="position">Позиция: ' . $_SESSION['temp']. "</div>";
   



if ($_SESSION['temp']>30) {
	$_SESSION['temp']=$_SESSION['temp']-30;
	$_SESSION['money']=$_SESSION['money']+100;
	?><b><div = class="round"> Печелиш 100 монети за завършена обиколка!</div></b><?php
}
  //echo "<br>" . $_SESSION['temp'] . "<br>";
// $_SESSION['temp']=9;
switch ($_SESSION['temp']) {
	case '1':
		$sel1=$select;
		$_SESSION['money']=$_SESSION['money']+5;
		$message="Добре дошъл местния бар! Милена черпи!!! Печелиш Главоболие! и 5 монети :)";
		break;
	case '2':
		$sel2=$select;
		if ($_SESSION['hotel2']==0) {
			
			if ($_SESSION['money']>100) {
			$_SESSION['money']=$_SESSION['money']-100;
			$_SESSION['hotel2']=1;
			$message="Честито, купи хотел :)"; 
			}else{
				$_SESSION['money']=$_SESSION['money']-10;
				$message="Нощувка в хотела - 10";
			}

		}else{
			$message="Минаваш тънко - хотела е твой";
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
		$message=" Неизправност в свързването с WI_FI мрежата. Моля, свържете се с оператор. Пропускате два хода :(" ;
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
		if ($_SESSION['hotel7']==0) {
			
			if ($_SESSION['money']>100) {
			$_SESSION['money']=$_SESSION['money']-100;
			$_SESSION['hotel7']=1;
			$message="Честито, купи хотел :)"; 
			}else{
				$_SESSION['money']=$_SESSION['money']-10;
				$message="Нощувка в хотела - 10";
			}

		}else{
			$message="Минаваш тънко - хотелът е твой";
		}
		break;
	case '8':
		$sel8=$select;
		$_SESSION['money']=$_SESSION['money']+100;
		$message=" Стар приятел ти върна 100 монети!";
		break;
	case '9':
		$sel9=$select;

include('includes/form.php');
		break;
	case '10':
			$sel10=$select;
		if ($_SESSION['hotel10']==0) {
			
			if ($_SESSION['money']>100) {
			$_SESSION['money']=$_SESSION['money']-100;
			$_SESSION['hotel10']=1;
			$message="Честито, купи хотел :)"; 
			}else{
				$_SESSION['money']=$_SESSION['money']-10;
				$message="Нощувка в хотела - 10";
			}

		}else{
			$message="Минаваш тънко - хотела е твой";
		}
		break;
	case '11':
		$sel12=$select;
		$_SESSION['count']=$_SESSION['count']-2;
		$message=" Неизправност в свързването с WI_FI мрежата. Моля, свържете се с оператор. Пропускате два хода :(" ;
		break;
	case '12':
		$sel12=$select;
		$_SESSION['count']=$_SESSION['count']-5;
		$message="ШПИОНИН В МРЕЖАТА! Обвинен сте в кражбата на 10 000 номера на кредитни карти от търговски компютър в Райфайзенбанк - Враца. Отивате във Врачанския затвор и губите 5 хода!!!";
		break;
	case '13':
		$sel13=$select;
		include('includes/form.php');
		break;
	case '14':
		$sel14=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="Днес е време да почерпиш. Сметката е 5 монети :(";
		break;

	case '15':
		$sel15=$select;
		$_SESSION['money']=$_SESSION['money']-100;
		$message=" Ти беше захапан от Троянски Кон - 100 монети надолу!";
		break;
	case '16':
		$sel16=$select;
		$_SESSION['money']=$_SESSION['money']+50;
		$message="Отговоориха на обявата ти в OLX за продажбата на компа + 50 монети";
		
		break;
	case '17':
		$sel17=$select;
		$_SESSION['count']=$_SESSION['count']-7;
		$message=" ШПИОНИН В МРЕЖАТА! Обвинен сте в нелегално източване на данни от сървъра на ВСО. Попдате във Врачанския затвор и губите 5 хода!!! :(" ;
		break;
	case '18':
		$sel18=$select;
		$_SESSION['count']=$_SESSION['count']+20;
		$message="Турбо тежим 20 хвърляния бонус" ;
		
		break;
	case '19':
		$sel19=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="Оправи си вересиите. Имаш неплатена сметка в бара. Губиш 5 монети :(";
		break;

	case '20':
		$sel20=$select;
		include('includes/form.php');
		break;
	case '20':
		$sel20=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '21':
		$sel21=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message="Спъна се в портфейла на Емо но в него имаше само 20 монети. Честито!";
		break;
	case '22':
		$sel22=$select;
		$_SESSION['money']=$_SESSION['money']-5;
		$message="ВСЕ ОЩЕ ИМАШ ВЕРСИИ В БАРА!  Губиш 5 монети :(";
		break;
	case '23':
		$sel23=$select;
		if ($_SESSION['hotel23']==0) {
			
			if ($_SESSION['money']>100) {
			$_SESSION['money']=$_SESSION['money']-100;
			$_SESSION['hotel23']=1;
			$message="Честито, купи хотел :)"; 
			}else{
				$_SESSION['money']=$_SESSION['money']-10;
				$message="Нощувка в хотела - 10";
			}

		}else{
			$message="Минаваш тънко - хотела е твой";
		}
		break;
	case '24':
		$sel24=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '25':
		$sel25=$select;
include('includes/form.php');
		break;
	case '26':
		$sel26=$select;
		$_SESSION['money']=$_SESSION['money']-100;
		$message=" Ти беше захапан от Троянски Кон - 100 монети надолу!";
		break;
	case '27':
		$sel27=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети - еи така !";
		break;
	case '28':
		$sel28=$select;
		if ($_SESSION['hotel28']==0) {
			
			if ($_SESSION['money']>100) {
			$_SESSION['money']=$_SESSION['money']-100;
			$_SESSION['hotel28']=1;
			$message="Честито, купи хотел :)"; 
			}else{
				$_SESSION['money']=$_SESSION['money']-10;
				$message="Нощувка в хотела - 10";
			}

		}else{
			$message="Минаваш тънко - хотела е твой";
		}
		break;
	case '29':
		$sel29=$select;
		$_SESSION['money']=$_SESSION['money']+20;
		$message=" зЕми тия 20 монети :)";
		break;
	case '30':
		$sel30=$select;
		$_SESSION['result']="Брао, бе! WINNER!!! :)";
		header('Location: game_over.php');
		break;


}
if ($_SESSION['hotel2']==1) {
$select2= "border: 4px solid green;"; 
}
if ($_SESSION['hotel7']==1) {
$select7= "border: 4px solid green;"; 
}
if ($_SESSION['hotel10']==1) {
$select10= "border: 4px solid green;"; 
}
if ($_SESSION['hotel23']==1) {
$select23= "border: 4px solid green;"; 
}
if ($_SESSION['hotel28']==1) {
$select28= "border: 4px solid green;"; 
}
if ($_SESSION['money'] <= 0 ) {
	$_SESSION['result']="Ти остана без пукната пара !";
	header('Location: game_over.php');
}

if ($_SESSION['count'] <= 0  ) {
	$_SESSION['result']="Свършиха ти ходовете !!";
	header('Location: game_over.php');
}

if ($_SESSION['hotel2']==1 and $_SESSION['hotel7']==1 and $_SESSION['hotel10']==1 and $_SESSION['hotel23']==1 and $_SESSION['hotel28']==1 ) {
	$_SESSION['result']="Ти Притежаваш Всичко";
	header('Location: game_over.php');
}

?>

<style type="text/css">
	.div1{ <?php echo $sel1;?> }
	.div2{ <?php echo $select2;?>; <?php echo $sel2;?> }
	.div3{ <?php echo $sel3;?> }
	.div4{ <?php echo $sel4;?> }
	.div5{ <?php echo $sel5;?> }
	.div6{ <?php echo $sel6;?> }
	.div7{ <?php echo $select7;?>; <?php echo $sel7;?>; }
	.div8{ <?php echo $sel8;?> }
	.div9{ <?php echo $sel9;?> }
	.div10{ <?php echo $select10;?>; <?php echo $sel10;?> }
	.div11{ <?php echo $sel11;?> }
	.div12{ <?php echo $sel12;?> }
	.div13{ <?php echo $sel13;?> }
	.div14{ <?php echo $sel14;?> }
	.div15{ <?php echo $sel15;?> }
	.div16{ <?php echo $sel16;?> }
	.div17{ <?php echo $sel17;?> }
	.div18{ <?php echo $sel18;?> }
	.div19{ <?php echo $sel19;?> }
	.div20{ <?php echo $sel20;?> }
	.div21{ <?php echo $sel21;?> }
	.div22{ <?php echo $sel22;?> }
	.div23{ <?php echo $select23;?>; <?php echo $sel23;?>  }
	.div24{ <?php echo $sel24;?> }
	.div25{ <?php echo $sel25;?> }
	.div26{ <?php echo $sel26;?> }
	.div27{ <?php echo $sel27;?> }
	.div28{ <?php echo $select28;?>; <?php echo $sel28;?>  }
	.div29{ <?php echo $sel29;?> }
	.div30{ <?php echo $sel30;?> }
</style>

<form method="" action="">


	<input type="submit" name="submit" id="hover3" value="<?php echo $rand ;?>" class="dice" onclick="alert('<?php echo $message;  ?> ')">

</form>
<div class="logoutgame"  > <a href="logout.php" id="hover4">Log out</a> </div>
<div class="container">
<div class="size div1">B-1</div>
<div class="size div2">H-2</div>
<div class="size div3">C-3</div>
<div class="size div4">S-4</div>
<div class="size div5">C-5</div>
<div class="size div6">D-6</div>
<div class="size div7">H-7</div>
<div class="size div8">C-8</div>
<div class="size div9">Q-9</div>
<div class="size div10">H-10</div>
<div class="size div11">S-11</div>
<div class="size div12">P-12</div>
<div class="size div13">Q-13</div>
<div class="size div14">B-14</div>
<div class="size div15">T-15</div>
<div class="size div16">C-16</div>
<div class="size div17">P-17</div>
<div class="size div18">T-18</div>
<div class="size div19">B-19</div>
<div class="size div20">Q-20</div>
<div class="size div21">C-21</div>
<div class="size div22">B-22</div>
<div class="size div23">H-23</div>
<div class="size div24">C-24</div>
<div class="size div25">Q-25</div>
<div class="size div26">T-26</div>
<div class="size div27">C-27</div>
<div class="size div28">H-28</div>
<div class="size div29">C-29</div>
<div class="size div30">W-30</div>
</div>

<?php

include('includes/footer.php');
?>