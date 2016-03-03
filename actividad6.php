
<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('employees') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM employees where emp_no < 10100' ;
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

//Imprimir los resultados en HTML
echo "<table>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>";
    foreach ($line as $col_value) {
        echo "<td>".$col_value."</td>";
    }
    echo "</tr>";
}
echo "</table>";

// // Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>
