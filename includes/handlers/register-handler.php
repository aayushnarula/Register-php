<?php
function sanitizeFormUser($inputText){
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}
function santizeFormString($inputText){
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$firstName = ucfirst(strtolower($inputText));
	return $inputText;
}

function santizeFormPassword($inputText){
	$inputText = strip_tags($inputText);
}

if(isset($_POST['registerButton'])){
	$Username = sanitizeFormUser($_POST['Username']);
	$firstName = santizeFormString($_POST['firstName']);
	$lastName = santizeFormString($_POST['lastName']);
	$email = santizeFormString($_POST['email']);
	$email2 = santizeFormString($_POST['email2']);
	$password = santizeFormPassword($_POST['password']);
	$password2 = santizeFormPassword($_POST['password2']);

}
?>
