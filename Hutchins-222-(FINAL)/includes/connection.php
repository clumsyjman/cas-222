               <?php	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$affiliation = $_POST["affiliation"];
        $question = $_POST["question"];

		$name = mysqli_real_escape_string($db, $name);
		$email = mysqli_real_escape_string($db, $email);
		$affiliation = mysqli_real_escape_string($db, $affiliation);
		$question = mysqli_real_escape_string($db, $question);
		
		
			$query = mysqli_query($db, "INSERT INTO users (name, email, affiliation, question)VALUES ('$name', '$email', '$affiliation', '$question')");
			if($query)
			{
				$msg = "Thank You! We will get back to you within 24 hours!";
			}
		
	}


?>