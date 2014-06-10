<?php
//if ($_POST["hantar"]) {
    $nama = $_POST["nama"];
	$lahir = $_POST["lahir"];
	$jantina = $_POST["jantina"];
	if (isset($_POST['melayu']))$melayu = $_POST["melayu"]; else $melayu = "off";
	if (isset($_POST['cina']))$cina = $_POST["cina"]; else $cina = "off";
	if (isset($_POST['india']))$india = $_POST["india"]; else $india = "off";
	
	$pekerjaan = $_POST["pekerjaan"];
	$komen = $_POST["textarea-1"];

	echo "Nama :$nama <br/>
		  Tarikh Lahir :$lahir <br/>
		  Jantina :$jantina <br/>";
	if ($melayu != 'off') echo "Melayu :$melayu <br/>";
	if ($cina != 'off') echo "cina :$cina <br/>";
	if ($india != 'off') echo "india :$india <br/>";
    echo "
		  Jenis Pekerjaan :$pekerjaan <br/>
		  Komen :$komen ";
	
// }
?>
