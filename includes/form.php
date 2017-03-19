<?php

$_SESSION['answer_check']=2;
$message="Дали направи правилният избор ?";
$quest_rand = rand(1,6);
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
$correct_answer = $qusts[$quest_rand][3];
?>
<div class="quest">
<p><?php echo   $qusts[$quest_rand][0];    ?>  </p>
<form method="post" action="">
<input type="hidden" value="<?php echo $qusts[$quest_rand][3] ?>" name="correct_answer">
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp1]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp1]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
  <input type="submit" name="submit" value="answer" onclick="alert('<?php echo $message;  ?> ')">
</div>
<?php

	
		
?>