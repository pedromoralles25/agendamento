<?php
include "conecta_mysql.inc";

$sql = "SELECT * FROM agendamento;";
$res = mysqli_query($mysqli, $sql);
$linhas = mysqli_num_rows($res);

date_default_timezone_set('America/Fortaleza');
$now = date('d/m/Y H:i:s');

echo $now.'<br>';

$data = $_POST['data'];
$hora = $_POST['hora'];

$data = strtotime(Date("$data"));
echo date('d/m/Y', $data).' ';
echo $hora;

$sql = "INSERT INTO agendamento (data, hora)";
$sql .= "VALUES ('$data, $hora');";  
mysqli_query($mysqli,$sql);

?>