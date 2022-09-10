<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Encomiendas</title>
    </head>
    <body>

        <h1>CRUD Encomiendas</h1>
        <form method="post" action="">
        <input type="text" name="origen" placeholder="sucursal de origen">
        <input type="text" name="destino" placeholder="sucursal de destino">
            <input type="text" name="recibe" placeholder="Recibe" />
            <input type="text" name="envia" placeholder="Envia" />
            <input type="text" name="tipo" placeholder="Tipo" />
            <input type="text" name="Fecha" placeholder="Fecha" />
            <input type="submit" name="guardar" value="Guardar" />
        </form>
        <br>
        <form method="post" action="">
            <input type="text" name="nro" placeholder="Número a eliminar" /> <input type="submit" name="eliminar" value="Borrar" />
        </form>
        <br>
        <form method="post" action="">
            <input type="text" name="nroMod" placeholder="Número para modificar" />
            <input type="text" name="recibeMod" placeholder="Recibe" />
            <input type="text" name="enviaMod" placeholder="Envia" />
            <input type="text" name="tipoMod" placeholder="Tipo" />
            <input type="text" name="FechaMod" placeholder="Fecha" />
            <input type="submit" name="modificar" value="Modificar" />
        </form>
        <br>
        <table border="1" >
            <tr>
                <th>Sucursal</th>
                <th>Nro</th>
                <th>Recibe</th>
                <th>Envia</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
               
            </tr>

<?php
                //Recorremos el array para ir mostrando fila a fila los registros
                foreach ($datos as $dato) {
                    
                    echo "<tr><td>".$dato["origencodigo"]."</td><td>".$dato["nro"]."</td><td>".$dato["recibe"]."</td><td>".$dato["envia"]."</td><td>".$dato["fecha"]."</td><td>".$dato["tipo"]."</td></tr>";
                
                }
                
            ?>
        </table>
     </body>
</html>