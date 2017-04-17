<?php
//compiler .frm menjadi HTML + inner CSS

session_start();

$xml		= [];

class Komponen {
	public $nama_komp	= 'form';
	public $id 			= "";
	public $posisi 		= 0;
	public $end 		= false;
	public $TabIndex 	= 0;
	public function __construct($nama_komp, $id, $posisi) {
		$this->nama_komp 	= $nama_komp;
		$this->id 			= $id;
		$this->posisi 		= $posisi;
	}

}

if (isset($_GET['path'])) {
	$form		= file($_GET['path']);
} else {
	$form		= file("source/alket/cari.frm");
}

if (!$form) { echo 'error opening file';

} else {

	foreach($form as $str) {

		  //begin
	  	if (substr_count ($str, "Begin ") ) {
	  		$posisi 				= stripos($str, "Begin ");
	  		$ttk 					= stripos($str, ".")+1;
	  		$arr 					= explode(" ", rtrim(substr($str, $ttk)), 2);
    		$exe[$arr[1]] 			= new Komponen($arr[0], $arr[1], $posisi);
    		$xml[count($xml)+1] 	= str_repeat(' ', $posisi) . '' . $arr[1] . '';

		  //end
		} else if (preg_replace('/\s+/', '', $str) == "End") {
			$tutup 			= stripos($str, "End". PHP_EOL);
			foreach($exe as $key) {
			    if ($key->posisi == $tutup && $key->end == false) {
			    	$key->end = true;
			    	$xml[count($xml)+1] = str_repeat(' ', $key->posisi) . '/' . $key->id . '';
			    }
			}

		  //property
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
				if ($nama_properti=='Height'||$nama_properti=='Width'||$nama_properti=='Top'||$nama_properti=='Left') {

					//konversi twip ke inchi
			 		$value_properti = ($value_properti / 1440 );
				} 

				$exe[$arr[1]]->$nama_properti = $value_properti;

			}
		
		//lain2
		} else if (substr_count ($str, "Attribute") ) {
			break;
		}
	}
	//print_r ($exe);
	//print_r ($xml);

	foreach ($xml as $key=> $value) {
		$komp = preg_replace("/[^A-Za-z0-9]/", "", $value);
		if (substr_count ($value, "/") ) {
			unset($_SESSION["obj"]);
		} else {	
			$_SESSION["obj"]=$exe[$komp];
		}
		include( 'component/' . $exe[$komp]->nama_komp . '.php');
	}
}

?>


