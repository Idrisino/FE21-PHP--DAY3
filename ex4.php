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
        $i = 1;
        while($i <= 100) {
            if($i % 3 == 0) {
                echo "<p class='text-center m-0'>Back-End</p>";
            } else if($i % 5 == 0) {
                echo "<p class='text-center m-0'>Front-End</p>";
            } else {
                echo "<p class='text-center m-0'>" . $i . "</p>";
            }
            $i++;
        }
    ?>
</body>
</html>