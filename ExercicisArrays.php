<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<h1> RA3. ARRAYS </h1>";


    // Ejercicio 1

    echo "<h2>Ejercicio 1</h2>";

    $counter = 0;
    $dataUser = array("Sara", "Martinez", 23, "Barcelona");
    foreach ($dataUser as $value) {
        $counter++;
        echo "dato $counter º: $value <br>";
    }
    //---------------------------------------------------------//

    //Ejercicio 2

    echo "<h2>Ejercicio 2</h2>";

    $date = ["nombre" => "Sara", "apellido" => "Martínez", "edad" => 24, "ciudad" => "Barcelona"];

    foreach ($date as $i => $value) {
        echo "$i: $value <br>";
    }
    //---------------------------------------------------------//

    echo "<h2>Ejercicio 3</h2>";

    $counter = 0;

    foreach ($date as $i => $value) {
        $counter++;

        echo "dato $counter º: $value <br>";
    }


    //---------------------------------------------------------//

    echo "<h2>Ejercicio 4</h2>";

    //Destruye el apartado de ciudad
    unset($date['ciudad']);

    var_dump($date);

    //---------------------------------------------------------//

    echo "<h2>Ejercicio 5</h2>";

    $letters = "a,b,c,d,e,f";
    $letters_array = explode(",", $letters);

    rsort($letters_array);

    $count = count($letters_array);

    for ($i = 0; $i < $count; $i++) {
        $rank = $count - $i;
        $letters = $letters_array[$i];

        echo "letter " . $rank . "º: " . $letters . "<br>";
    }
    //---------------------------------------------------------//

    echo "<h2>Ejercicio 6</h2>";

    $notes = ["Marta" => 10, "Isabel" => 8, "Luís" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1];

    echo "Notas de los estudiantes:";
    foreach ($notes as $i => $value) {


        echo " $i: $value ";
    }
    //---------------------------------------------------------//

    echo "<h2>Ejercicio 7</h2>";
    
    $notesAverage = ["Marta" => 10, "Isabel" => 8, "Luís" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1];
    
    $count_average = array_sum($notesAverage); // suma los datos 

    $cantidad = count($notesAverage); //cuenta la cantidad de notas

    $average = $count_average / $cantidad;

    //round() para que lo muestre con dos decimales
    echo "Media de las notas: ". round($average, 2). "<br>";

    echo "Alumnos con nota por encima de la media: <br>";

    foreach($notesAverage as $nombre => $nota){

        if($nota > $average){
            echo $nombre . "<br>";

        }

    }

     //---------------------------------------------------------//

    echo "<h2>Ejercicio 8</h2>";

    
    $notesAverage = ["Marta" => 10, "Isabel" => 8, "Luís" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1];

    $max_note = max($notesAverage);

    //con el array_search se usa para buscar un valor especifico dentro del array, que buscas y donde lo buscas
    $alum_maxNote = array_search($max_note, $notesAverage);
    echo "La nota más alta es ". $max_note ." y el mejor alumno es ".$alum_maxNote ;
   

    ?>
</body>

</html>
