<?php
$fp = fopen("products.csv", "r");
while (( $data = fgetcsv ( $fp , 2048, "," )) !== false ) { // Mientras hay líneas que leer...

$i = 0; 
foreach($data as $row) {
echo "$row\n"; // Muestra todos los campos de la fila actual 
$i++ ;

}

echo "\n";

} 
fclose ( $fp ); 
?>