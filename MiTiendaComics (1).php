<?php
// Definición del inventario de cómics

//arrays dentro de un array. SUSPENSE Y ACCION. Inventario tiene dos categorias
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{

    global $inventario; //con esto llamamos a la variable INVENTARIO

    $total = 0; //contador del total del inventario inicializado a 0


    //uso el foreach para recorrer categoria por categoria
    foreach ($inventario as $categoria) {

        //hago otro foreach para buscar los comics dentro de la categoria
        foreach ($categoria as $comics) {

            //seleccion el precio de los comics para multi por el stock
            $total = $total + ($comics["precio"] * $comics["stock"]);
        }
    }

    //no se hace el echo dentro del foreach porque se ejecutara a la vez q el foreach
    echo "Total del valor del almacén: " . $total . "<br>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    //cambio del foreach para que recorra la categoria 
    //eliminar el filtrado [accion] y el &
    foreach ($inventario as $nombreCategoria => $comics) {

        //otro foreach para recorrer los comics
        foreach ($comics as $posicion => $comic) {

            //if para filtrar por idioma
            if ($comic['idioma'] == 'Japonés') {

                //seleccion del precio y multi por 0.7

                $inventario[$nombreCategoria][$posicion]["precio"] = $comic["precio"] * 0.7;

                // $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
            }
        }
    }
}
