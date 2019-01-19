<?php

function formVadilationUser($username){
	$minVal = strlen($username) == 8;
	$unVal = preg_match('/[_]/', $username);
	$lowVal = preg_match('/[a-z]/', $username);
	if ($minVal && $unVal && $lowVal) {
		echo "password true";
	}else{
		echo "password false";
	}
}
$user = "hanif_ma";
formVadilationUser($user);

function formVadilationPassword($password){
	$minVal = strlen($password) == 8;
	$kapVal = preg_match('/[A-Z]/', $password);
	$lowVal = preg_match('/[a-z]/', $password);
	$specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password);
	
	if ($minVal && $kapVal && $lowVal && $specVal) {
		echo "password true";
	}else{
		echo "password false";
	}
}
$pass = "ASAsS%^&";
formVadilationPassword($pass);
?>