<?php
	$edwardthf_username = 'edwardthf';
	$edwardthf_password = '1234';
	$wrong = '用戶名或密碼錯誤';

	if (isset($POST['submit'])) {

		$user = $_REQUEST['username'];
		$pass = $_REQUEST['pass'];

		if($user == $edwardthf_username and $pass == $edwardthf_password) {

			$_SESSION['user'] = $user;
			header("Location: http://home.puiching.edu.mo/~0700898-8/qantas/php/qantasmath.php");

		} else {

			echo "Wrong <br> 按這裹<a href='login.php'>重試</a>";

		}

		}

?>