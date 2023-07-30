<?php
include ("database/database.php");
session_start();
$may=$_SESSION['user_id'];



if(isset($_POST['check']) and isset($_POST['delete'])){
  $check=$_POST['check'];

   $del="delete from message where message_id=$check;";
   $run=mysqli_query($connection, $del);


if($run){
		echo "<script>
alert('Successfully deleted');
	</script>";
}
}

//var_dump($arr['receiver_id']);
// $alright=$arr["subject"];
// if(count
// if($arr>0){
// $alright=$arr['subject'];
//}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>My Inbox</h1>
<?php
$lite="SELECT message_id, fname, sname, subject FROM signup, message WHERE message.receiver_id=$may and signup.user_id=message.writer_id;";//selects details from both tables
$all=mysqli_query($connection, $lite);
echo"<table border='2'><th>Delete<th>First Name<th>SurName<th>Subject</th>";
//looping a table
while($arr=mysqli_fetch_array($all)){
	$id=$arr['message_id'];

	//var_dump($arr['message_id']);
	echo "<form action='' method='post'>";
	echo"<tr><td><input type='checkbox' name='check' value='$id' ></td>";
	echo"<td><a href='message.php?msg_id=$id'>".$arr['fname']."</a></td>";//entering with a unique msg id
	echo"<td><a href='message.php?msg_id=$id'>".$arr['sname']."</a></td>";
	echo"<td><a href='message.php?msg_id=$id'>".$arr['subject']."</a></td>";
}
echo"</tr></table>";
echo "<br>"."<input type='submit' value='delete'></form>";


?>
</body>
</html>