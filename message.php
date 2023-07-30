<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$may=$_SESSION['user_id'];
$my_id=$_GET["msg_id"];
//$his_id=$_GET['writer_id'];

include ("database/database.php");
$lite="SELECT fname, sname, email, subject, body FROM message, signup WHERE message.message_id=$my_id and message.writer_id=signup.user_id;";//selects details from both tables
$all=mysqli_query($connection, $lite);
$arr=mysqli_fetch_array($all);


echo "Sender: ".$arr['fname']." ".$arr['sname']."<br>".$arr['email']."<br>".$arr['subject'];
 echo"<div style='background:#137fb3; color:white; height:100px; width:400px; font-family:sans-serif; border-radius:5px;'>". $arr['body']."</div>";

?>

<a href="sending.php">Reply</a>
</body>
</html>