<?php

	$con = mysqli_connect("localhost", "root", "admin", "meusite", 3306);

	$cod_estados = $_GET['estado'];

	$cidades = array();

	$sql = "SELECT cod_cidades, nome
			FROM cidades
			WHERE estados_cod_estados=$cod_estados
			ORDER BY nome";
	$res = mysqli_query( $con, $sql );
	while ( $row = mysqli_fetch_assoc($res) ) {
		$cidades[] = array(
			'cod_cidades'	=> $row['cod_cidades'],
			'nome'			=> $row['nome'],
		);
	}
	
	
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );
	echo( json_encode( $cidades ) );
?>