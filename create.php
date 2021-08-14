<?php
    require "db_connect.php";

    if(isset($_POST["submit"])) {
        $image = $_POST["image"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
    }

    $sql = "INSERT INTO 'dish'('image', 'name', 'price', 'description') VALUES ('$image', '$name', '$price', '$description')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Success <a href='index.php'>Back to the Homepage</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="image">
        <input type="text" name="name">
        <input type="text" name="price">
        <input type="text" name="description">
        <input type="submit" name="submit">
    </form>
</body>
</html>