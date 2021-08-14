<?php
    require "db_connect.php";

    $sql = "SELECT * FROM dish";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        // while($row = mysqli_fetch_assoc($result)) {
        //     echo "<div class='card col-md-4'>
        //     <img src='" . $row['image'] . "' class='card-img-top' alt='Nachos'>
        //     <div class='card-body'>
        //         <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        //         <a href='#' class='btn btn-primary'>Button</a>
        //     </div>
        //     </div>";
        // }
        
        echo '<div class="container-fluid m-0 p-5 row">';
        
        foreach($rows as $val) {
            echo "<div class='card col-md-4'>
            <div class='p-3 m-3'>
            <img src='" . $val['image'] . "' class='card-img-top' alt='Nachos'>
            <div class='card-body'>
                <p class='card-text'>" . $val['description'] . "</p>
                <a href='#' class='btn btn-outline-danger'>Delete</a>
            </div>
            </div>
            </div>";
        }

        echo "</div>";
    ?>
</body>
</html>