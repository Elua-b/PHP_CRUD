<?php
   define("HOST", "localhost");
   $DB_user = "root";
   $DB_password = "";
   $DB_name = "designdb";
   $id = $_GET['id'];
   $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
   if (!$connection) {
       echo "Connection not successfull" . mysqli_connect_error();
   }
   else{
$sql = "DELETE FROM users where id=$id";
if($connection->query($sql)=== true){
    header('location:display.php');
}
else{
    echo "404 user not found";
}
   }
?>