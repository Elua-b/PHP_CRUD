<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php

    define("HOST", "localhost");
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "designdb";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_name);
    if (!$connection) {
        echo "Connection not successfull" . mysqli_connect_error();
    } else {
        $sql = "SELECT * FROM users;";
        $result = $connection->query($sql);
        // echo "<table><tr><th>ID</th><th>FirtName</th><th>lastName</th><th>Gender</th><th>telephone</th></tr>";
        // while($row=mysqli_fetch_assoc($select)){
        //     echo "<td>$row[user_id]</td>";
        //     echo "<td>$row[firstName]</td>";
        //     echo "<td>$row[lastName]</td>";
        //     echo "<td>$row[gender]</td>";
        //     echo "<td>$row[telephone]</td>";
        //     echo "</tr>";
        // }
        // echo "</table>";


    ?>
        <table>
            <tr>
                <th>id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Username</th>
                <th>email</th>
                <th>Nationality</th>
                <th>password</th>
                <th>confirm_password</th>
                <th>operation</th>

            </tr>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $b = $row['firstName'];
                $c  = $row['lastName'];
                $d  = $row['Gender'];
                $e = $row['username'];
                $f  = $row['Email'];
                $g = $row['nationality'];
                $h= $row['password'];
                $i= $row['confirm_password'];
                $id = $row['id'];
                ?>

<tr>
    <td><?= $id?></td>
    <td><?php  echo $b; ?></td>
    <td><?php  echo $c; ?></td>
    <td><?php  echo $d;  ?></td>
    <td><?php   echo $e; ?></td>
    <td><?php  echo $f; ?></td>
    <td><?php echo $g; ?></td>
    <td><?php echo $h; ?></td>
    <td><?php echo $i; ?></td>
    <td><a href="<?= "delete.php?id={$id}";?>">delete</a></td>
    
</tr>
<?php


};
};
?>
</table>

</body>

</html>