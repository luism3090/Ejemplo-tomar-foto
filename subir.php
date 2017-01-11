<?php

$ruta = 'fotos/';


$archivoTemp = $_FILES['imagen2']['tmp_name'];
$nombre_archivo = $_FILES['imagen2']['name'];

$ifp = fopen($output_file, "wb"); 

/*echo "<br>";
echo $tipo;
echo "<br>";
echo $tamano;
echo "<br>";

echo $ruta.$nombre_archivo;
echo "<br>";
*/



$subir =  move_uploaded_file($archivoTemp, $ruta.$nombre_archivo);

if($subir)
{
	echo "El archivo se subio con éxito";
}
else
{
	echo "Error al subir el archivo";
}


?>