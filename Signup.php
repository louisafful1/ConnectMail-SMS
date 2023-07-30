<?php
include ("database/database.php");
//require("session.php");

if(isset($_POST["fname"]) and isset($_POST["sname"]) and isset($_POST["phone"]) and isset($_POST["email"]) and isset($_POST["gender"]) and isset($_POST["password"]) and isset($_POST["confirm"]) and isset($_POST["submit"])){

$fname=htmlspecialchars($_POST["fname"]);
$sname=filter_input(INPUT_POST, "sname", FILTER_SANITIZE_SPECIAL_CHARS);
$phone=filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$gender=filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
$password=filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
$confirm=filter_input(INPUT_POST, "confirm", FILTER_SANITIZE_SPECIAL_CHARS);



$query="insert into signup(user_id, fname, sname, phone, email, gender, password) values(DEFAULT, '$fname', '$sname', '$phone', '$email', '$gender', '$password');";
$execute=mysqli_query($connection, $query);


if ($execute){
	echo "<script>
alert('Successfully Submitted');
document.location='login.php';
	</script>";
}else 	echo "<script>
alert('$email already exists with another user. Please try again with a different email!');
	</script>";


}

// $select="select user_id from signup where email='$email';";
// $run=mysqli_query($connection, $select);
// $row=mysqli_num_rows($run);

// if($row>0){
// 	 	echo "<script>
// alert('$email already exists with another user. Please try again with a different email!');
// 	</script>";
// } else{
	
// 	if ($execute){echo "<script>
// alert('Submitted Successfully');
// document.location='index.php';
// 	</script>";
// }
// }


//phpinfo();//php information

//$Fname=$Sname=$Phone=$Email=$Gender=$Password=$Confirm="";




?>
<!-- <?php

//   if (!preg_match("/^[a-zA-Z-]*$/", $_POST["fname"])) {
// 	echo  "<script>
// alert('Only letters and whitespace allowed!');
// 	</script>";
// 	}
?>
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css'> 
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
 <!-- <style="background-image: url(image2/banner-3.jpg); background-size:cover;"> -->
<!-- <?php
// if(isset($message)){
// 	echo "<div class='message' onclick='this.remove();'>".$message."</div>";


?> -->

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="signup">

	First Name: <input type="text" name="fname" required accept="" placeholder="First Name"><br><br>

	Surname: <input type="text" name="sname" required><br><br>

	Phone Number: <input type="text" name="phone" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /><br><br>

	Email: <input type="email" name="email" required><br><br>

	Male<input type="radio" name="gender" value="Male" required>  Female<input type="radio" name="gender" value="Female" required><br><br>

	Password: <input type="password" name="password"  maxlength="10" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"><br><br>

	Confirm Password: <input type="password" name="confirm" required  minlength="8"  maxlength="10"><br><br>
	<input type="button" value="submit" onclick="test(signup)">

</form>

 <div class="small"><a href="login.php">Have an account? Go to login</a></div>
  <div class="small"><a href="index.php">Back to Home</a></div>

<script type="text/javascript">
	function test(signup){
		if(signup.fname.value==""){
			alert("Please Enter Your First Name");
		}else if(signup.sname.value==""){
			alert("Please Enter Your Surname");
		}else if(signup.phone.value==""){
			alert("Please Enter Your phone Number");
		}else if(signup.email.value==""){
			alert("Please Enter Your Email");
		}else if(signup.gender.value==""){
			alert("Please Enter Your Gender");
		}else if(signup.password.value==""){
			alert("Please Enter Your Password");
		}else if(signup.confirm.value==""){
			alert("Please Confirm Your Password");
		}else if(signup.password.value!=signup.confirm.value){
			alert("Please check the password very well!");
		 }else{
			signup.submit();
		 }
		 
	}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>
</html>