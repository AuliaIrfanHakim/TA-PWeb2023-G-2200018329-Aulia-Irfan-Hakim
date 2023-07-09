<?php
	$arrNilai=array("Satu"=>100, "Dua"=>85, "Tiga"=>80, "Empat"=>95);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	ksort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan ksort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 

	krsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan krsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 
?>