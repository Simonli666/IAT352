


<html lang="en">
	<head>
		<title>Landing Page</title>
		   <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
	</head>
	<body>

			<div class="form-style-5">
	<form action="signUp.php" method="post">
		<fieldset>
			<legend><span class="number"> Sign Up</legend>
				<input type="text" name="name"  placeholder="Your Name *"  value="<?php  $name;?>" >

				<input type="email" name="email" placeholder="Your Email *" value="<?php  $email;?>">
				<input type="text" name="password" placeholder="Create a Password *" value="<?php  $password;?>">
				<input type="text" name="RepassWord" placeholder="Re-Enter the passward *" value="<?php  $RepassWord;?>">
				

					<label for="job">Interests:</label>
				<select id="" name="interest">

				
				  <option value="Horror">Horror</option>
				  <option value="Action">Action</option>
				  <option value="Drama">Drama</option>
				  <option value="Fantacy">Fantacy</option>
				  <option value="International">International</option>
				  <option value="Other">Other</option>

				</select>   

				</fieldset>

				<input type="submit" name="submit" value="Submit" />
				</form>
				</div>

<!-- check  if variables are empty-->
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// define variables and set to empty values
$name = $email = $password = $ReEnterPassword = "";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$ReEnterPassword = $_POST["RepassWord"];
$interest = $_POST["interest"];

$file = 'member.txt';
// Open connection to the $file in writing mode


// check form valid
	if ($password != $ReEnterPassword) {
	echo "Passwords are not identical!!";
	} 
	
 	if ($name == "" || $email == "" || $password == "" || $interest =="")  {

		echo "*Please Fill in the form!!";

	}


	if($handle = fopen($file, 'a+')) { 	

		
	// Write string to the file
	// the function returns the number of bytes interted or false
	fwrite($handle, "$name,$email,$password,$interest\n");

	// echo "$name,$email,$password,$interest\n";

	fclose($handle);
} else {
	echo "Could not open file for writing.";
}

	
	

}



?>


<!-- read form  -->
<?php	

		// $name = (!empty($_POST['name']) ? $_POST['name'] : "");
		// $email = (!empty($_POST['email']) ? $_POST['email'] : "");
		// $password = (!empty($_POST['password']) ? $_POST['password'] : "");
		// $ReEnterPassword = (!empty($_POST['RepassWord']) ? $_POST['RepassWord'] : "");
		// $interest = (!empty($_POST['interest']) ? $_POST['interest'] : "");

		
		
	
?>





	</body>


	<style type="text/css">
		.form-style-5{
			max-width: 500px;
			padding: 10px 20px;
			background: #f4f7f8;
			margin: 10px auto;
			padding: 20px;
			background: #f4f7f8;
			border-radius: 8px;
			font-family: Georgia, "Times New Roman", Times, serif;
		}
		.form-style-5 fieldset{
			border: none;
		}
		.form-style-5 legend {
			font-size: 1.4em;
			margin-bottom: 10px;
		}
		.form-style-5 label {
			display: block;
			margin-bottom: 8px;
		}
			.form-style-5 input[type="text"],
			.form-style-5 input[type="date"],
			.form-style-5 input[type="datetime"],
			.form-style-5 input[type="email"],
			.form-style-5 input[type="number"],
			.form-style-5 input[type="search"],
			.form-style-5 input[type="time"],
			.form-style-5 input[type="url"],
			.form-style-5 textarea,
			.form-style-5 select {
			font-family: Georgia, "Times New Roman", Times, serif;
				background: rgba(255,255,255,.1);
				border: none;
				border-radius: 4px;
				font-size: 15px;
				margin: 0;
				outline: 0;
				padding: 10px;
				width: 100%;
				box-sizing: border-box; 
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box; 
				background-color: #e8eeef;
				color:#8a97a0;
				-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
				box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
				margin-bottom: 30px;
			}
			.form-style-5 input[type="text"]:focus,
			.form-style-5 input[type="date"]:focus,
			.form-style-5 input[type="datetime"]:focus,
			.form-style-5 input[type="email"]:focus,
			.form-style-5 input[type="number"]:focus,
			.form-style-5 input[type="search"]:focus,
			.form-style-5 input[type="time"]:focus,
			.form-style-5 input[type="url"]:focus,
			.form-style-5 textarea:focus,
			.form-style-5 select:focus{
				background: #d2d9dd;
			}

			.form-style-5 select{
				-webkit-appearance: menulist-button;
				height:35px;
			}
	/*		.form-style-5 .number {
				background: #1abc9c;
				color: #fff;
				height: 30px;
				width: 30px;
				display: inline-block;
				font-size: 0.8em;
				margin-right: 4px;
				line-height: 30px;
				text-align: center;
				text-shadow: 0 1px 0 rgba(255,255,255,0.2);
				border-radius: 15px 15px 15px 0px;
			}*/

			.form-style-5 input[type="submit"],
			.form-style-5 input[type="button"]
			{
				position: relative;
				display: block;
				padding: 19px 39px 18px 39px;
				color: #FFF;
				margin: 0 auto;
				background: #1abc9c;
				font-size: 18px;
				text-align: center;
				font-style: normal;
				width: 100%;
				border: 1px solid #16a085;
				border-width: 1px 1px 3px;
				margin-bottom: 10px;
			}
			.form-style-5 input[type="submit"]:hover,
			.form-style-5 input[type="button"]:hover
			{
				background: #109177;
			}

</style>


</html>