<?php
session_start();
$writer_id=$_SESSION['user_id'];
include ("database/database.php");


if(isset($_POST['tomail']) and isset($_POST['subject']) and isset($_POST['body']) and isset($_POST['submit']))
    {
	$tomail=$_POST['tomail'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];



$sel="SELECT user_id FROM signup WHERE email='$tomail';";
$now=mysqli_query($connection, $sel);
$hy=mysqli_fetch_array($now);
$receiver_id=$hy['user_id'];

$insert="INSERT  INTO message(message_id, writer_id, receiver_id, subject, body) 
VALUES(DEFAULT, '$writer_id', '$receiver_id', '$subject', '$body');";
$go=mysqli_query($connection, $insert);


//print_r("INSERT  INTO message(message_id, writer_id, receiver_id, subject, body) VALUES(DEFAULT, '$writer_id', '$sql', '$subject', '$body';");

if ($go){
	echo "<script>
alert('Successfully Submitted');
document.location='homepage.php';
	</script>";

}


}

?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 	<?php 
// require("session.php");
// $sele="SELECT email FROM signup WHERE user_id='$_SESSION['user_id']';";
// $nowa=mysqli_query($connection, $sele);
// $hya=mysqli_fetch_array($nowa);
// $writer_email=$hya['email'];

	?> -->
<form action="" name="send" method="post">
    Message From: <input type="email" name="from_email"  value="<?php 
    $myquery="select email from signup where user_id='$writer_id';";
    $exequ=mysqli_query($connection, $myquery);
    $resu=mysqli_fetch_array($exequ);
    echo 
    $sender_email=$resu['email'];
     ?>"><br><br>
	Message To: <input type="email" name="tomail"><br><br>
	Subject: <input type="text" name="subject"><br><br>
	<textarea cols="50" rows="10" name="body" ></textarea><br>
	
	<input type="submit" name="submit">


</form>
<a href="homepage.php">Back</a>
</body>
</html>