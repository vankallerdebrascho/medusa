<!-- fungsi-fungsi pertukaran data client dengan database !>



<?php
	//cek sesi
	session_start();
	if( !isset($_SESSION["nip"]) or !isset($_SESSION["password"]) or !isset($_SESSION["jabatan"]) ){
	    header("location:".$_SERVER['DOCUMENT_ROOT']."/frame/login.php");
	    exit();
	}

	//cek role
	function cek_role($konten){
		$counts = array_count_values($_SESSION["konten"]);
		if($_SESSION["jabatan"]=="oc"){
			return true;
		}
		if($counts[$konten]>0){
			return true;
			exit();
		}
	}

	//kode_json
	function kode_json($id) {
		$conn 	= mysqli_connect("localhost","","","");
		$rows 	= array();
		$reslt  = $conn->query($id);
		while($r = mysqli_fetch_assoc($reslt)) {
		   $rows[] = $r;
		}
		echo json_encode($rows);
		mysqli_free_result($reslt);
		mysqli_close($conn);
		$conn 	= "";
	}


?>

