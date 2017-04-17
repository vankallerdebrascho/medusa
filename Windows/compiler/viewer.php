<?php
//compiler .frm menjadi HTML + inner CSS


$exe 		= [];
$xml;

class Komponen {
	public $nama_komp	= 'form';
	public $id 			= "";
	public $posisi 		= 0;
	public $end 		= false;

	public function __construct($nama_komp, $id, $posisi) {
		$this->nama_komp 	= $nama_komp;
		$this->id 			= $id;
		$this->posisi 		= $posisi;

		echo str_repeat(' ', $this->posisi);
		echo  "<" . $this->id . ">\n";
	}

}

$form		= file("source/alket/cari.frm");
$file 		= print_r($form, true);
echo $file;
$line		= 0;
$arr		= [];
$begin 		= 0;
$value_properti;
$nama_properti;


if ($form) {

	echo "\n";
	echo "\n";
	echo ':::::::::STRUKTUR XML:::::::::';
	echo "\n";
	echo "\n";

	foreach($form as $str) {

		$line++;

	  	if (substr_count ($str, "Begin ") ) {
	  		$begin 			= stripos($str, "Begin ");
	  		$ttk 			= stripos($str, ".")+1;
	  		$arr 			= explode(" ", rtrim(substr($str, $ttk)), 2);
    		$exe[$arr[1]] 	= new Komponen($arr[0], $arr[1], $begin);

		} else if (preg_replace('/\s+/', '', $str) == "End") {
			$tutup 			= stripos($str, "End". PHP_EOL);
			foreach($exe as $key) {
			    if ($key->posisi == $tutup && $key->end == false) {
			    	$key->end = true;
			    	echo  str_repeat(' ', $key->posisi);
			    	echo  "</" . $key->id . ">\n";
			    }
			}

		} else if (substr( $str, 0, 1 )==' ') {
			if (!stripos($str, "Property")) {
				

				//hapus "" double quote
				$str = str_replace('"', '', $str);

				//pecah string menjadi array : propery = value
				$prop = explode('=', $str, 2);
				
				//hapus spasi di nama property
				$nama_properti = preg_replace('/\s+/', '', $prop[0]);

				//hapus spasi depan belakang pada value property
				$value_properti = trim($prop[1]);

				//hapus komentar (' apostrophe)
				if (stripos($prop[1], "'")) {
					$comment_pos 	= stripos($value_properti, "'");
					$value_properti = substr($value_properti, 0, $comment_pos);
				}

				//konversi twips standar vb ke inchi
				if ($prop[0]=='Height'||$prop[0]=='Width'||$prop[0]=='Top'||$prop[0]=='Left') {
					$twip 	 = $prop[1];
					echo $twip;
			 		$prop[1] = ($prop[1] / 1440 ) . 'in = '.$twip.'twip';
				} 

				$exe[$arr[1]]->$nama_properti = $value_properti;

			}
		} else if (substr_count ($str, "Attribute") ) {
			break;
		}

	}

	echo "\n";
	echo "\n";
	echo ':::::::STRUKTUR OBJEK::::::::';
	echo "\n";
	echo "\n";
	print_r($exe);

	echo "\n";
	echo "\n";
	echo ':::::::STRUKTUR JSON::::::::';
	echo "\n";
	echo "\n";
	echo json_encode($exe);


} else {

    echo 'error opening file';

} 

?>