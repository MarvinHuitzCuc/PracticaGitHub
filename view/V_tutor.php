<!doctype html>
<html>
<head>
    <!-- <title>Conexion con base de datos de Niños </title> -->  
</head>

<body>
    <h1>Tutores</h1>
    <h2><?php echo $data["titulo"]; ?> </h2> 

    <!-- Hacemos la tabla para desplegar datos -->
        <table>
            <thead>
                <tr>
                    <th>Id_Tutor </th>
                    <th>Nombre </th>
                    <th>Apellido </th>
                    <th>Edad </th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($data["tutor"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["idTutor"]."</td>";
                    echo "<td>".$dato["nombreT"]."</td>";
                    echo "<td>".$dato["apellidoT"]."</td>";
                    echo "<td>".$dato["fechanacT"]."</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table> 

</body>

</html>