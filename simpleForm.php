<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>contact</title>
</head>

<body>

<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$comment = $_POST["comments"];
$subject = "Web Contact Form";

//Enter your email address
$to = "aajones3@butler.edu";


//Prepare Email Body Text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $firstName . ' ' . $lastName;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Comments: ";
	$Body .= $comment;
	$Body .= "\n";

//Send Email
$send_contact= mail($to,$subject,$Body);
if($send_contact) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=Thanks.php\">";
}
 else {
	 print "<meta http-equiv=\"refresh\" content=\"0;URL=ContactError.html\">";
}
?>



</body>
</html>
