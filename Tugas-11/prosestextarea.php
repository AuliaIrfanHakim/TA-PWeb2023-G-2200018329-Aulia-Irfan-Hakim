<?php 
if(isset($_POST['Proses'])){
	$semangka=nl2br($_POST['semangka']);
	echo "Pengertian semangka menurut anda adalah: <br>";
	echo "<font color=blue><b>$semangka</b></font>";
}
?>