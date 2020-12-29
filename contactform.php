<?php
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
$to      = 'info@estherboateng.co.uk';
$from    = 'info@estherboateng.co.uk';
$email   = $_POST['email'];
$subject = 'New Contact Us Query';
$message = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nSubject: ".$_POST['subject']."\nMessage: ".$_POST['message']."";
$headers = 'From: '.$from."\r\n" .
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
	echo'
	<script>
	swal("Thank you", "Message has been sent!", "success");
	</script>
	';
	echo'<script>$("#reset")[0].reset()</script>';
}else
{
	echo'
	<script>
	swal("Error", "Email not send!", "info");
	</script>
	';
}
}else{
	echo'
	<script>
	swal("Pay attention!", "Enter valid email!", "info");
	</script>
	';
}
?>