<?php
	error_reporting(E_ERROR | E_PARSE);
	require './library_qencriptor/Qdecryptor.php';
	$string = empty($_POST['string'])?null:$_POST['string'];
	$key    = empty($_POST['key'])?null:$_POST['key'];
	$decripted_text = null;

	if (!is_null($string) && !is_null($key)) {
		$dekrip = new Qdecryptor($key, $string);
		$decripted_text = $dekrip->dekrip();
		$data = array(
			'status' => true , 
			'decripted_text' => $decripted_text
		);	
	}else{
		$data = array(
			'status' => false , 
			'decripted_text' => $decripted_text
		);
	}

	print_r(json_encode($data));
?>