<?php
	$arrWarna = array("Red", "Yellow", "Green", "Blue", "Purple", "Pink");

	echo "Menampilkan isi array dengan FOR: <br>";
	for ($i = 0; $i < count($arrWarna); $i++){
		echo "Menampilkan Warna <font color=$arrWarna[$i]>". $arrWarna[$i]. "</font><br>";
	} 

	echo "<br>Menampilkan isi array dengan FOREACH: <br>";
	foreach ($arrWarna as $warna){
		echo "Menampilkan Warna <font color=$warna>". $warna. "</font><br>";
	}
?>