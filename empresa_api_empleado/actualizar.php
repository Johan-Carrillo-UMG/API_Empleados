<?php
	$txt_codigo = utf8_decode($_POST["txt_codigo"]);
	$txt_codigo = utf8_decode($_POST["txt_codigo"]);
	$txt_nombres = utf8_decode($_POST["txt_nombres"]);
	$txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
	$txt_telefono = utf8_decode($_POST["txt_telefono"]);
	$txt_direccion = utf8_decode($_POST["txt_direccion"]);
	$drop_puesto = utf8_decode($_POST["drop_puesto"]);
	$txt_fn = utf8_decode($_POST["txt_fn"]);

	$arrContextOptions=array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);

	$url = "https://localhost:5001/api/empleados/";  /*Este es para verlos todos*/
	$json = file_get_contents($url, false, stream_context_create($arrContextOptions));

	echo "$json";
?>