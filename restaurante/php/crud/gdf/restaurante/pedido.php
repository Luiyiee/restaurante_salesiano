<?php
session_start();

require_once "../../../configuracion/conexion.php";
$conexion = conexion();
$id = $_POST['id'];

	$sql = "DELETE FROM `tb_pedidos` WHERE id_pedidos='$id'";

	echo $result = mysqli_query($conexion, $sql);
