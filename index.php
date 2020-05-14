<?php 

    header('Access-Control-Allow-Origin: *');
    include 'vendor/autoload.php';
    include 'funciones/qrCode.php';
    include 'funciones/log.php';
    include 'funciones/saveCode.php';

	/* ESCRIBE HISTORIAL DE PETICIONES A LA APP EN UN LOG */
	writeToLog($_REQUEST, 'incoming');
    $qrCode = generateQr($_REQUEST["id"]);
    print_r($qrCode); exit
    $saveCode = saveCode($_REQUEST["id"], $qrCode);
    print_r($saveCode);
?>