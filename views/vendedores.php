<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vendedores automotora</title>
    </head>
    <body>
    <button onclick="location.href='../views/menu.php'">Volver</button>    
        <center>
            <h2>Vendedores</h2>
            <form action="" method="post">
                <input type="text" name="ci" placeholder="Ci"><br>
                <input type="text" name="nombre" placeholder="Nombre"><br>
                <input type="text" name="direccion"placeholder="Direccion"><br>
                <input type="submit" name ="Guardar" value="Guardar">
            </form>
            <h2>Eliminar</h2>
            <form action="" method="post">
                <input type="text" name="ci" placeholder="Ci" require><br>
                 <input type="submit" name ="eliminar" value="Eliminar">
            </form>
            <h2>Modificar</h2>
            <form action="" method="post">
                <input type="text" name="ci" placeholder="Ci" require><br>
                <input type="text" name="nombre" placeholder="Nombre" require><br>
                <input type="text" name="direccion" placeholder="Dirección" require><br>
                <input type="submit" name ="modificar" value="Modificar">
            </form>
            <br>
        <table border="1" width="300">
            <tr>
                <th>Ci</th>
                <th>Nombre</th>
                <th>Dirección</th>

            </tr>
            <?php
                //Recorremos el array para ir mostrando fila a fila los registros
                foreach ($datos as $dato) {
                    echo "<tr><td>".$dato["ci"]."</td>
                        <td>".$dato["nombre"]."</td>
                        <td>".$dato["direccion"]."</td>";
                }
            ?>
        </table>
        </center>
    </body>
</html>