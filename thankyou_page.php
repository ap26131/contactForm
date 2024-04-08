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
		</div>
    </body>
</html>