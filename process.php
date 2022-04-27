<?php
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$userName = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$role=$_POST['role'];
$temporary_filename = $_FILES['image_dir']['tmp_name'];
$final_filename = $_FILES['image_dir']['name'];
// $temporary_filename = $_FILES['image_dir']['tmp_name'];

// $final_filename = $_FILES['image_dir']['name'];

// $dir = 'public/';
// $file_target = $dir . basename($_FILES["image_dir"]["name"]);

// if(move_uploaded_file($_FILES["image_dir"]["tmp_name"], $file_target)){
//     echo "Successfully saved the file";
// } else {
//     die("Failed to save the file");
// }

// $filename = $file_target;

if (($firstName == "") || ($lastName == "") || ($Email == "") || ($password !== $confirm_password)) {
    echo "You don't have full details";
} else {
    define("HOST", "localhost");
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
    if (!$connection) {

        echo "Connection not successfull" . mysqli_connect_error();
    } else {
        $insertQuery = "UPDATE users SET firstName = '$firstName',image_dir='$final_filename', lastName = '$lastName'  , telephone= '$telephone' , username='$username' ,gender='$gender', nationality='$nationality', Email='$Email', username='$username',Role='$role' WHERE id = '$id'";
        $insert =  mysqli_query($connection, $insertQuery) or die("Error occured" . mysqli_error($connection));
        if ($insert) {
            header('location: display.php');
        }
        // echo "Connected";

    }
}


?>
<a href="display.php" title="Display Data">Display</a>