<?php 
include ("database/database.php");
// Code for login 
if(isset($_POST['login']) and isset($_POST['password']) and isset($_POST['email']))
{
$userpassword=$_POST['password'];
$useremail=$_POST['email'];
$ret= mysqli_query($connection,"SELECT user_id,fname FROM signup WHERE email='$useremail' and password='$userpassword';");
$num=mysqli_fetch_array($ret);
if($num>0)
{
//require("session.php");
    session_start();
$_SESSION['user_id']=$num['user_id'];
$_SESSION['fname']=$num['fname'];
header("location:homepage.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css'>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(image2/banner-1.jpg);">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="card-header">
                                    <h2 align="center">Registration and Login System</h2>
                                    <hr />
                                    <h3 class="text-center font-weight-light my-4">User Login</h3>
                                </div>
                                <div class="card-body">

                                    <form method="post">

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                            <label class="form-check-label" for="autoSizingCheck">
                                                Remember me
                                            </label>
                                        </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="password-recovery.php">Forgot Password?</a>


                                    <div class="col-auto">



                                        <button class="btn btn-primary" name="login" type="submit">Login</button>
                                    </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                                    <div class="small"><a href="index.php">Back to Home</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <?php// include('includes/footer.php');?> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>