<?php
$firstName = $_POST['firstName'];


$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$userName = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if (($firstName == "") || ($lastName == "") || ($Email == "") || ($password !== $confirm_password)) {
    echo "I don't have full details";
} else {
    define("HOST", "localhost");
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
    if (!$connection) {
        echo "Connection not successfull" . mysqli_connect_error();
    } else {
        
        $insertQuery = "INSERT INTO users(firstName,lastName,Email,telephone,gender,nationality,userName,password, confirm_password ) VALUES('$firstName','$lastName','$Email','$telephone','$gender','$nationality','$userName','$password','$confirm_password'   );";
        $insert =  mysqli_query($connection, $insertQuery) or die("Error occured" . mysqli_error($connection));
        if ($insert) {
            echo "Data added";
        }
        // echo "Connected";

    }
}


?>
<a href="display.php" title="Display Data">Display</a>