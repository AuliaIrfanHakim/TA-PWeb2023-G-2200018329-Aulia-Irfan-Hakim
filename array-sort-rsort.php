<?php
	$arrNilai=array("Satu"=>90, "Dua"=>80, "Tiga"=>60, "Empat"=>70);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	sort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan sort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 

	rsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan rsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 
?>