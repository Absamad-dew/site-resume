<?php
include('config.php');
$name = $_POST['Name'];
$subject = $_POST['Subject'];
$email = $_POST['Email'];
$message = $_POST['Massage'];

$result = $conn->query("INSERT INTO fitback (Name,Subject,Email,Massage) VALUES ('$name','$subject','$email','$massage')");

if ($result == true){
	echo "Информация занесена в базу данных";
}else{
	echo "Информация не занесена в базу данных";
}

