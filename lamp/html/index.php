<?php
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";
// try {
//     $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .imgbox {
            display: grid;
            height: 100%;
        }

        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
    </style>
</head>

<body>
    <div>
        <img class="center-fit" src="/assets/Frame1.png">
    </div>
</body>

</html>
