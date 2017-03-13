<?php	
$servername ='localhost';
$username='root';
$password='';
$dbname='it_village';
$conn = mysqli_connect($servername ,$username , $password ,$dbname);
if (!$conn) {
	die("conection failed" . mysqli_connect_error());
}
else{
	echo "Успешна връзка ";
}
?>