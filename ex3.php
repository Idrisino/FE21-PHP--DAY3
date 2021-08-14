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
        $limit_random_array_values = range(1,100);
        shuffle($limit_random_array_values);
        $arr = array_slice($limit_random_array_values, 0, 10);

        function randNum($arr) {
            #$key = array_search(max($arr), $arr);
            $key = max($arr);
            #var_dump($arr);
            echo "The highest value of the array is: " . $key;
            #var_dump($key);
        }
        randNum($arr);
    ?>
</body>
</html>