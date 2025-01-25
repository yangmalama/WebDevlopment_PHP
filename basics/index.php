<?php
    echo "Hello world". "<br>";
    echo "Hello WORLD". "<br>";;
    $a = 5;
    $b =10;
    $c = $a + $b;
    echo "The sum is " . $c . "<br>";
    echo 'The sum is $c' . "<br>";
    echo "The sum is $c" . "<br>";
    echo "The sum is {$c}s". "<br>";

    $d = 20;
    $e = "20";

    echo $d === $e ? "True" : "False". "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $abc = 10;

    echo $abc . "<br>";
    $arr =[1, 2, 3, 4, 5];
    echo $arr[0]. "<br>";

    $arr2 = [
        [
        "name"=> "John",
        "age" => 25
        ], [
            "name"=> "Jane",
            "age" => 23
        ]
    ];

    foreach ($arr as $value){
        echo $value + 2 . "<br>";
        // echo $value . "<br>";
    }

    foreach ($arr2 as $value){
        echo $value["name"] . "<br>";
        // echo $value . "<br>";
    }

    $movies = [
        [
          'title' => 'The Shawshank Redemption',
          'director' => 'Frank Darabont',
          'year' => 1994
        ],
        [
          'title' => 'The Godfather',
          'director' => 'Francis Ford Coppola',
          'year' => 1972
        ],
        [
          'title' => 'The Dark Knight',
          'director' => 'Christopher Nolan',
          'year' => 2008
        ], [
          'title' => 'The Godfather: Part II',
          'director' => 'Francis Ford Coppola',
          'year' => 1974
        ]
      ];

    //   foreach($movies as $value){
    //     echo $value["title"] . "<br>". $value["director"] . "<br>". $value["year"] . "<br>" ;
    //   }
    function filter($movies) {
        $result = [];

        foreach ($movies as $movie) {
            if ($movie['year'] < 2000) {
                $result[] = $movie;
            }
        }
        return $result;
      }
      $result = filter($movies);

        foreach ($movies as $movie) {
            // echo "{$movie['title']} - {$movie['director']} - {$movie['year']}";
            // if ($movie['year'] < 2000) {
                echo "{$movie['title']} - {$movie['director']} - {$movie['year']} <br>";
            }
        // }
    ?>

</body>
</html>