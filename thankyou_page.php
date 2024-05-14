<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Thank you</title>
</head>
    <body>
		<div class="container"> 
			<h1>Thank you for Registration!</h1>
			<h4>Your information is:</h4>
			<p>First Name: <?php echo $_POST['fname']?></p>
			<p>Last Name: <?php echo $_POST['lname']?></p>
			<p>Address Name: <?php echo $_POST['address']?></p>
			<p>State: <?php echo $_POST['state']?></p>
			<p>Zip: <?php echo $_POST['zip']?></p>
			<p>Telephone: <?php echo $_POST['tphone']?></p>
			<p>Email: <?php echo $_POST['email']?></p>
			<div class="link-container"> 
				<a href="index.html">Return to the main Page</a> 
				<?php 
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$address = $_POST['address'];
				$state = $_POST['state'];
				$zip = $_POST['zip'];
				$tphone = $_POST['tphone'];
				$email = $_POST['email'];
				
				$data = "First Name: $fname\nLast Name: $lname\nAddress: $address\nState: $state\nZip: $zip\nTelephone: $tphone\nEmail: $email\n";
				$file = fopen("contactList.txt", "a") or die("Unable to open file");
				fwrite($file,$data);
				fclose($file);
				?>
			</div>
		</div>
    </body>
</html>