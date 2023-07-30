<?php
include ("database/database.php");

if(isset($_POST['old']) and isset($_POST['new']) and isset($_POST['conf']) and isset($_POST['submit'])){

$old=$_POST['old'];
$new=$_POST['new'];
$conf=$_POST['conf'];
session_start();
$_SESSION["user_id"];
$rete= mysqli_query($connection,"SELECT fname FROM signup WHERE user_id='$_SESSION['user_id']';");
$numa=mysqli_fetch_array($rete);
if($numa>0)
{
// require("session.php");
// $_SESSION['user_id']=$num['user_id'];
// $_SESSION['fname']=$num['fname'];
header("location:homepage.php");

}




$get=mysqli_query($connection, "SELECT fname FROM signup where user_id='$user';");



if ($get!=$old){
	echo "<script>
alert('You entered a correct Password');
	</script>";
}else echo "<script>
alert('You entered a wrong Password');
	</script>";



}
 ?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <form method="post" name="forgot-pwd">
        Enter Old Password: <input type="text" name="old"><br><br>
        Enter New password: <input type="text" name="new"><br><br>
        Confirm New Password: <input type="text" name="conf"><br><br>
        <input type="submit" name="submit">

    </form>


</body>

</html>