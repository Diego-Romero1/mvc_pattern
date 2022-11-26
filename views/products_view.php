<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
</head>

<body>
    <h1 class="bg-primary text-light text-center py-7">Listado de Productos</h1>
    <table class='table table-bordered table-striped'>
        <thead class='thead-dark'>
            <tr>

                <th> Codigo </th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Fecha de Alta</th>
                <th>id_categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $dato) {
                echo "<tr>";
                echo "<td>";
                echo $dato["id_product"] . "<br/>";
                echo "</td>";
                echo "<td>";
                echo $dato["product_name"] . "<br/>";
                echo "</td>";
                echo "<td>";
                echo $dato["price"] . "<br/>";
                echo "</td>";
                echo "<td>";
                echo $dato["start_date"] . "<br/>";
                echo "</td>";
                echo "<td>";
                echo $dato["id_category"] . "<br/>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
</body>

</html>