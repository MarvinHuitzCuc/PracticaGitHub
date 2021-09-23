<!doctype html>
<html>
<head>
    <!-- <title>Conexion con base de datos de Niños </title> -->
     
</head>

<body>
    <h1>Formulario</h1>
    <h2><?php echo $data["titulo"]; ?> </h2> 

    <!-- Hacemos la tabla para desplegar datos -->
        <table>
            <thead>
                <tr>
                    <th>Id_ninio </th>
                    <th>Nombre </th>
                    <th>Apellido </th>
                    <th>Fecha Nacimiento </th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($data["ninios"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["idNinio"]."</td>";
                    echo "<td>".$dato["nombresN"]."</td>";
                    echo "<td>".$dato["apellidosN"]."</td>";
                    echo "<td>".$dato["fechanacN"]."</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table> 

</body>

</html>