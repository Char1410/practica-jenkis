<?php
phpinfo();

$conn_string = "host=localhost port=5432 dbname=char user=1200517 password=1200517 options='--client_encoding=UTF8'";

$dbconn = pg_connect($conn_string);
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}

pg_close($dbconn);

?>