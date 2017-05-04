<?php
	error_reporting(E_ERROR | E_PARSE);
	require './library_qencriptor/Qdecryptor.php';
	$plain_text = empty($_GET['input'])?null:$_GET['input'];
	$encrypted_text = null;
	$key = null;

	if (!is_null($plain_text)) {
		$enkrip = new Qencrypt($plain_text);
		$encrypted_text = $enkrip->enkripsi();
		$key 			= $enkrip->GenerateKey();
		$data = array(
			"status"		 => true,		
			"encrypted_text" => $encrypted_text,
			"key"			 => $key
		);
	}else{
		$data = array(
			"status"		 => false,		
			"encrypted_text" => $encrypted_text,
			"key"			 => $key
		);
	}

	print_r(json_encode($data));
?>
