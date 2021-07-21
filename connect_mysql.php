<?php
$dbname = $_GET["database"];
$dbuser = $_GET["user"];
$dbpass = $_GET["senha"];
$dbhost = $_GET["host"];
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect){
echo "0";//"Error: " . mysqli_connect_error();
exit();
}
else
echo "1";
$tabela = $_GET["tabela"];
$texto1 = $_GET["texto1"];
$texto2 = $_GET["texto2"];
$peso = $_GET["peso"];
$peso_bruto = $_GET["peso_bruto"];
$tara = $_GET["tara"];
$cliente = $_GET["cliente"];
$produto = $_GET["produto"];
$acumulado = $_GET["acumulado"];
$data = $_GET["data"];
$hora = $_GET["hora"];
$latitude = $_GET["latitude"];
$longitude = $_GET["longitude"];
$altitude = $_GET["altitude"];
$transmitido = $_GET["transmitido"];
$transmitido_MQTT = $_GET["transmitido_MQTT"];
$query = "INSERT INTO $tabela (texto1, texto2, peso, peso_bruto, tara, cliente, produto, acumulado, data, hora, latitude, longitude, altitude, transmitido, transmitido_MQTT) VALUES ('$texto1', '$texto2', '$peso','$peso_bruto','$tara', '$cliente', '$produto', '$acumulado', '$data', '$hora', '$latitude', '$longitude', '$altitude', '$transmitido', '$transmitido_MQTT')";
$result = mysqli_query($connect,$query);
if($result)
echo "2";
else
echo "3";
mysqli_close($connect);
?>