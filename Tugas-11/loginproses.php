<?php 
if(isset($_POST['Login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if($user=="usernamesatu" && $pass=="user000"){
		echo("<h2>Login berhasil!</h2>");
	}else{
		echo "<h2> Login Gagal, ulang lagi! </h2>";
	}
}
?>