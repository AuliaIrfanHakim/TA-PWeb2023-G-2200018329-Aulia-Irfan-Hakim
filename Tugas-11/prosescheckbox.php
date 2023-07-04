<?php 
if(isset($_POST['Pilih'])){
	echo "Semangka Favorit Kamu adalah : <br>";
	if(isset($_POST['semangka1'])){
		echo "+ " .$_POST['semangka1'] . "<br>";
	}
	if(isset($_POST['semangka2'])){
		echo "+ " .$_POST['semangka2'] . "<br>";
	}
	if(isset($_POST['semangka3'])){
		echo "+ " .$_POST['semangka3'] . "<br>";
	}
	if(isset($_POST['semangka4'])){
		echo "+ " .$_POST['semangka4'] . "<br>";
	}
}
?>