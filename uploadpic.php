<?php 

	echo "test";

	session_start();
	echo "test";
	require('./connectiondata.php');
	echo "test";
	require_once('functions.php');
	echo "test";

	if($_POST['dp']=='')
	{
		$_SESSION['message'] = "Empty Password";
		redirect('changePassword.php');
	}
	else
	{
		$file = "images/" . basename($_FILES['dp']['name'])
		
		echo "testing";
		echo $file;
		changepic($_SESSION['userid'],$file);

		$_SESSION['sent'] = 1;
		$_SESSION['message'] = "Profile pic changed successfully";
	}


redirect('changePassword.php');
?>