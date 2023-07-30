<?php 
 $server="localhost";
 $user="root";
$password="";
$dbname="social";


 $connection=mysqli_connect($server, $user, $password, $dbname);


// try
// $connection=new PDO('mysql:host=localhost;dbname=social', 'root', '');
// $connection->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// }catch(PDOException $e){
// 	$error=$e->getmessage();
// }
?>




