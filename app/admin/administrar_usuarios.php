<html lang="es">
    <head>
        <meta charset="utf-8">
        <!-- Hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/body.css">
        <link rel="stylesheet" type="text/css" href="../../css/crud.css">
        <!-- Título de la página -->
        <title>Administrar de usuarios</title>
    </head>
    <body>
        <!-- Menú de navegación del sitio -->
        <?php 
            require_once("../../partials/menu/menu_admin.html");
        ?>
        <!-- CRUD -->
        <?php
            //conexión a la base de datos
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "web-tfg";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


            //mostrar registros
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            echo "<table>";
            echo "<tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Acciones</td>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td><a class='blue-button' href='?editar=" . $row['id'] . "'>Editar</a>   <a class='red-button' href='?borrar=" . $row['id'] . "'>Borrar</a></td>";
                echo "</tr>";
            }
            
echo "</table>";
echo "<p>";
echo "<a class='green-button' href'#'>Insertar</a>";
        ?>

    </body>
</html>