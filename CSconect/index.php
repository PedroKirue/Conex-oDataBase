<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha);
$banco = mysqli_select_db($mysqli, $senha);

if($mysqli->connect_errno){
    echo "falha na conecxão: (" .$mysqli->conect_errno . ")" . $mysqli->conect_errno;
}else{
    echo "Conectado";
}
$resultado = $mysqli -> query("SHOW DATABASES");
while($registro = mysqli_fetch_array($resultado)){
    print_r($registro);
}
