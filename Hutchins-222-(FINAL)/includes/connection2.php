               <?php	

	$msg2 = "";
	if(isset($_POST["submit2"]))
	{
		$name2 = $_POST["name2"];
		$email2 = $_POST["email2"];
		$phone_number = $_POST["phone_number"];
		$affiliation2 = $_POST["affiliation2"];
        $satevents = $_POST["satevents"];
		$sunevents = $_POST["sunevents"];
		$shirt = $_POST["shirt"];
		$gender = $_POST["gender"];
		$econtact = $_POST["econtact"];
		$econtactp = $_POST["econtactp"];
		

		$name2 = mysqli_real_escape_string($db, $name2);
		$email2 = mysqli_real_escape_string($db, $email2);
		$phone_number = mysqli_real_escape_string($db, $phone_number);
		$affiliation2 = mysqli_real_escape_string($db, $affiliation2);
		$satevents = mysqli_real_escape_string($db, $satevents);
		$sunevents = mysqli_real_escape_string($db, $sunevents);
		$shirt = mysqli_real_escape_string($db, $shirt);
		$gender = mysqli_real_escape_string($db, $gender);
		$econtact = mysqli_real_escape_string($db, $econtact);
		$econtactp = mysqli_real_escape_string($db, $econtactp);
		
		
		
			$query = mysqli_query($db, "INSERT INTO registration (name2, email2, phone_number, affiliation2, satevents, sunevents, shirt, gender, econtact, econtactp)VALUES ('$name2', '$email2', '$phone_number', '$affiliation2', '$satevents', '$sunevents', '$shirt', '$gender', '$econtact', '$econtactp')");
			if($query)
			{
				$msg2 = "Thank You! you have now been registered!";
			}
		
	}
?>