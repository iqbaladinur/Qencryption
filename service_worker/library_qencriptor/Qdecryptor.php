<?php
/**
* Qencrypt Decryptor
* @author iqbaladi 
*/
include 'Qencrypt.php';
use Qencrypt;

class Qdecryptor extends Qencrypt{
	private $string_encripted;
	private $key_decryptor;
	function __construct($key, $string){
		$this->key_decryptor	= hex2bin($key); 
		$this->string_encripted = hex2bin($string);
	}

	public function dekrip(){
		$dekripted_text  = array();
		$un_cutted_key   = parent::AssignCharToNumber($this->key_decryptor);
		$encryption_text = parent::AssignCharToNumber($this->string_encripted);
		for ($i=0; $i < count($un_cutted_key) ; $i++) {
			$minus = $i + 1;	 
			if ($i % 2 == 0) {
				$frasa_2[]=$un_cutted_key[$i];
			}else{
				$frasa_1[]=$un_cutted_key[$i];
			}
		}

		for ($i=0; $i < count($encryption_text); $i++) { 
			$dekripted_text[]=(($frasa_2[$i]*84)+$encryption_text[$i])/$frasa_1[$i];
		}

		$plain_array = parent::AssignNumberToChar($dekripted_text);
		return parent::Finalization($plain_array);
	}
}

?>