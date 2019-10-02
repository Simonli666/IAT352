
	<?php	

		$name = (!empty($_POST['name']) ? $_POST['name'] : "");
		$email = (!empty($_POST['email']) ? $_POST['email'] : "");
		$password = (!empty($_POST['passWord']) ? $_POST['passWord'] : "");
		$ReEnterPassword = (!empty($_POST['RepassWord']) ? $_POST['RepassWord'] : "");
		$interest = (!empty($_POST['interest']) ? $_POST['interest'] : "");

		$file = 'member.txt';
// Open connection to the $file in writing mode

	// if ($name == "" || $email == "" || $password == "" || $interest =="")  {

	// 	echo "*Please Fill in the form";

	// }else 

		if ($password != $ReEnterPassword) {
	echo "Passwords are not identical!!";
}

	if($handle = fopen($file, 'a+')) { 	

		

	// Write string to the file
	// the function returns the number of bytes interted or false
	fwrite($handle, "$name,$email,$password,$interest\n");

	echo "$name,$email,$password,$interest\n";

	fclose($handle);
} else {
	echo "Could not open file for writing.";
}
		
	
?>