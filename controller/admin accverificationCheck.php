<?php
	session_start();

	if(isset($_POST['submit'])){

		$email= $_POST['email'];
		

		if($email != ''){
			$user =['email'=>$email];
			$_SESSION['user'] = $user;
			header('location: ../view/verificationCode.php');
		}else{
			echo "successfully varified...";
		}
	}else{
		echo "invalid request...";
	}

?>