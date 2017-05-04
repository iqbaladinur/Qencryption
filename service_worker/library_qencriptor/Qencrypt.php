<?php
/**
* Qencrypt Class
* @author iqbaladi
*/
class Qencrypt{
	private $plain_text;
	private $chipper_text;
	private $key_one = array();
	private $key_two = array();
	private $combine_key; 
	
	function __construct($string){
		$this->plain_text=$string;
	}

	protected function Finalization($array = array()){
		$string = null;
		for($i = 0; $i < count($array); $i++) {
			$string .= $array[$i];
		}

		return $string;
	}

	protected function AssignNumberToChar($array = array()){
		for ($i=0; $i < count($array); $i++) { 
			switch ($array[$i]) {
				case 0:
					$array[$i]="_";
					break;
				case 1:
					$array[$i]="A";
					break;
				case 2:
					$array[$i]="a";
					break;
				case 3:
					$array[$i]="B";
					break;
				case 4:
					$array[$i]="b";
					break;
				case 5:
					$array[$i]="C";
					break;
				case 6:
					$array[$i]="c";
					break;
				case 7:
					$array[$i]="D";
					break;
				case 8:
					$array[$i]="d";
					break;
				case 9:
					$array[$i]="E";
					break;
				case 10:
					$array[$i]="e";
					break;
				case 11:
					$array[$i]="F";
					break;
				case 12:
					$array[$i]="f";
					break;
				case 13:
					$array[$i]="G";
					break;
				case 14:
					$array[$i]="g";
					break;
				case 15:
					$array[$i]="H";
					break;
				case 16:
					$array[$i]="h";
					break;
				case 17:
					$array[$i]="I";
					break;
				case 18:
					$array[$i]="i";
					break;
				case 19:
					$array[$i]="J";
					break;
				case 20:
					$array[$i]="j";
					break;
				case 21:
					$array[$i]="K";
					break;
				case 22:
					$array[$i]="k";
					break;
				case 23:
					$array[$i]="L";
					break;
				case 24:
					$array[$i]="l";
					break;
				case 25:
					$array[$i]="M";
					break;
				case 26:
					$array[$i]="m";
					break;
				case 27:
					$array[$i]="N";
					break;
				case 28:
					$array[$i]="n";
					break;
				case 29:
					$array[$i]="O";
					break;
				case 30:
					$array[$i]="o";
					break;
				case 31:
					$array[$i]="P";
					break;
				case 32:
					$array[$i]="p";
					break;
				case 33:
					$array[$i]="Q";
					break;
				case 34:
					$array[$i]="q";
					break;
				case 35:
					$array[$i]="R";
					break;
				case 36:
					$array[$i]="r";
					break;
				case 37:
					$array[$i]="S";
					break;
				case 38:
					$array[$i]="s";
					break;
				case 39:
					$array[$i]="T";
					break;
				case 40:
					$array[$i]="t";
					break;
				case 41:
					$array[$i]="U";
					break;
				case 42:
					$array[$i]="u";
					break;
				case 43:
					$array[$i]="V";
					break;
				case 44:
					$array[$i]="v";
					break;
				case 45:
					$array[$i]="W";
					break;
				case 46:
					$array[$i]="w";
					break;
				case 47:
					$array[$i]="X";
					break;
				case 48:
					$array[$i]="x";
					break;
				case 49:
					$array[$i]="Y";
					break;
				case 50:
					$array[$i]="y";
					break;
				case 51:
					$array[$i]="Z";
					break;
				case 52:
					$array[$i]="z";
					break;
				case 53:
					$array[$i]=";";
					break;
				case 54:
					$array[$i]="1";
					break;
				case 55:
					$array[$i]="2";
					break;
				case 56:
					$array[$i]="3";
					break;
				case 57:
					$array[$i]="4";
					break;
				case 58:
					$array[$i]="5";
					break;
				case 59:
					$array[$i]="6";
					break;
				case 60:
					$array[$i]="7";
					break;
				case 61:
					$array[$i]="8";
					break;
				case 62:
					$array[$i]="9";
					break;
				case 63:
					$array[$i]="0";
					break;
				case 64:
					$array[$i]=".";
					break;
				case 65:
					$array[$i]="?";
					break;
				case 66:
					$array[$i]=',';
					break;
				case 67:
					$array[$i]='"';
					break;
				case 68:
					$array[$i]="-";
					break;
				case 69:
					$array[$i]="!";
					break;
				case 70:
					$array[$i]="/";
					break;
				case 71:
					$array[$i]="(";
					break;
				case 72:
					$array[$i]=")";
					break;
				case 73:
					$array[$i]="&";
					break;
				case 74:
					$array[$i]="#";
					break;
				case 75:
					$array[$i]="@";
					break;
				case 76:
					$array[$i]="+";
					break;
				case 77:
					$array[$i]="=";
					break;
				case 78:
					$array[$i]="*";
					break;
				case 79:
					$array[$i]="^";
					break;
				case 80:
					$array[$i]="%";
					break;
				case 81:
					$array[$i]="$";
					break;
				case 82:
					$array[$i]=">";
					break;
				case 83:
					$array[$i]=":";
					break;
				case 84:
					$array[$i]=" ";
					break;
				
				default:
					$array[$i]="Null";
					break;
			}	
		}

		return $array;	
	}

	protected function AssignCharToNumber($string){
		$number_assigned = array();
		$plain_text_array = str_split($string);
		foreach ($plain_text_array as $char ) {
			switch ($char) {
				case '_':
					$number_assigned[] = 0;
					break;
				case 'A':
					$number_assigned[] = 1;
					break;
				case 'a':
					$number_assigned[] = 2;
					break;
				case 'B':
					$number_assigned[] = 3;
					break;
				case 'b':
					$number_assigned[] = 4;
					break;
				case 'C':
					$number_assigned[] = 5;
					break;
				case 'c':
					$number_assigned[] = 6;
					break;
				case 'D':
					$number_assigned[] = 7;
					break;
				case 'd':
					$number_assigned[] = 8;
					break;
				case 'E':
					$number_assigned[] = 9;
					break;
				case 'e':
					$number_assigned[] = 10;
					break;
				case 'F':
					$number_assigned[] = 11;
					break;
				case 'f':
					$number_assigned[] = 12;
					break;
				case 'G':
					$number_assigned[] = 13;
					break;
				case 'g':
					$number_assigned[] = 14;
					break;
				case 'H':
					$number_assigned[] = 15;
					break;
				case 'h':
					$number_assigned[] = 16;
					break;
				case 'I':
					$number_assigned[] = 17;
					break;
				case 'i':
					$number_assigned[] = 18;
					break;
				case 'J':
					$number_assigned[] = 19;
					break;
				case 'j':
					$number_assigned[] = 20;
					break;
				case 'K':
					$number_assigned[] = 21;
					break;
				case 'k':
					$number_assigned[] = 22;
					break;
				case 'L':
					$number_assigned[] = 23;
					break;
				case 'l':
					$number_assigned[] = 24;
					break;
				case 'M':
					$number_assigned[] = 25;
					break;
				case 'm':
					$number_assigned[] = 26;
					break;
				case 'N':
					$number_assigned[] = 27;
					break;
				case 'n':
					$number_assigned[] = 28;
					break;
				case 'O':
					$number_assigned[] = 29;
					break;
				case 'o':
					$number_assigned[] = 30;
					break;
				case 'P':
					$number_assigned[] = 31;
					break;
				case 'p':
					$number_assigned[] = 32;
					break;
				case 'Q':
					$number_assigned[] = 33;
					break;
				case 'q':
					$number_assigned[] = 34;
					break;
				case 'R':
					$number_assigned[] = 35;
					break;
				case 'r':
					$number_assigned[] = 36;
					break;
				case 'S':
					$number_assigned[] = 37;
					break;
				case 's':
					$number_assigned[] = 38;
					break;
				case 'T':
					$number_assigned[] = 39;
					break;
				case 't':
					$number_assigned[] = 40;
					break;
				case 'U':
					$number_assigned[] = 41;
					break;
				case 'u':
					$number_assigned[] = 42;
					break;
				case 'V':
					$number_assigned[] = 43;
					break;
				case 'v':
					$number_assigned[] = 44;
					break;
				case 'W':
					$number_assigned[] = 45;
					break;
				case 'w':
					$number_assigned[] = 46;
					break;
				case 'X':
					$number_assigned[] = 47;
					break;
				case 'x':
					$number_assigned[] = 48;
					break;
				case 'Y':
					$number_assigned[] = 49;
					break;
				case 'y':
					$number_assigned[] = 50;
					break;
				case 'Z':
					$number_assigned[] = 51;
					break;
				case 'z':
					$number_assigned[] = 52;
					break;
				case ';':
					$number_assigned[] = 53;
					break;
				case '1':
					$number_assigned[] = 54;
					break;
				case '2':
					$number_assigned[] = 55;
					break;
				case '3':
					$number_assigned[] = 56;
					break;
				case '4':
					$number_assigned[] = 57;
					break;
				case '5':
					$number_assigned[] = 58;
					break;
				case '6':
					$number_assigned[] = 59;
					break;
				case '7':
					$number_assigned[] = 60;
					break;
				case '8':
					$number_assigned[] = 61;
					break;
				case '9':
					$number_assigned[] = 62;
					break;
				case '0':
					$number_assigned[] = 63;
					break;
				case '.':
					$number_assigned[] = 64;
					break;
				case '?':
					$number_assigned[] = 65;
					break;
				case ',':
					$number_assigned[] = 66;
					break;
				case '"':
					$number_assigned[] = 67;
					break;
				case '-':
					$number_assigned[] = 68;
					break;
				case '!':
					$number_assigned[] = 69;
					break;
				case '/':
					$number_assigned[] = 70;
					break;
				case '(':
					$number_assigned[] = 71;
					break;
				case ')':
					$number_assigned[] = 72;
					break;
				case '&':
					$number_assigned[] = 73;
					break;
				case '#':
					$number_assigned[] = 74;
					break;
				case '@':
					$number_assigned[] = 75;
					break;
				case '+':
					$number_assigned[] = 76;
					break;
				case '=':
					$number_assigned[] = 77;
					break;
				case '*':
					$number_assigned[] = 78;
					break;
				case '^':
					$number_assigned[] = 79;
					break;
				case '%':
					$number_assigned[] = 80;
					break;
				case '$':
					$number_assigned[] = 81;
					break;
				case '>':
					$number_assigned[] = 82;
					break;
				case ':':
					$number_assigned[] = 83;
					break;
				case ' ':
					$number_assigned[] = 84;
					break;
				default:
					$number_assigned[] = 85;
					break;
			}
		}

		return $number_assigned;
	}

	public function enkripsi(){
		$level_1 = array();
		$this->key_one = NULL;
		$this->chipper_text = NULL;
		$number_of_plain_text = $this->AssignCharToNumber($this->plain_text);
		for ($i = 0; $i < count($number_of_plain_text); $i++) { 
			$random_key 		= random_int(1, 84);
			$level_1[$i] 		= (($number_of_plain_text[$i]*$random_key) % 84);
			$this->key_one[$i]	= $random_key;
			$this->key_two[$i]  = floor($number_of_plain_text[$i]*$random_key/84);	
		}
		$final_chipper = $this->AssignNumberToChar($level_1);
		$this->chipper_text = $this->Finalization($final_chipper);
		return bin2hex($this->chipper_text);
	}

	public function GenerateKey(){
		$this->combine_key = null;
		$frasa_1 = $this->AssignNumberToChar($this->key_one);
		$frasa_2 = $this->AssignNumberToChar($this->key_two);
		
		for($i = 0; $i < count($frasa_1); $i++){
			$this->combine_key .=$frasa_2[$i].$frasa_1[$i];
		}

		return bin2hex($this->combine_key);
	}
}
?>