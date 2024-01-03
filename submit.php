<html>
<title></title>
<?php

require_once('class.phpmailer.php');

$transactID = rand(1000, 5000);  // Not guaranteed to be unique.
$mail = new PHPMailer(true);  // Passing true to have exceptions raised on errors, which we catch.

$mail->IsSMTP(); // telling the class to use SMTP

try {
	$mail->SMTPDebug  = 0;  // Set to 2 to enable SMTP debug information for testing.
	$mail->SMTPAuth   = true;  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";  // sets the prefix to the servier
	$mail->Host       = "";  // The SMTP server to utilize for e-mail delivery.
	$mail->Port       = 465;  // The SMTP port number to connect to to attempt delivery.
	$mail->Username   = "";  // The username to authenticate with.
	$mail->Password   = "";  // The password to authenticate with.
	
	$mail->AddAddress($_POST['email'], 'Student');  // XXX: Harden
	$mail->AddAddress('<!-- YOUR EMAIL HERE -->', 'Class Organizer');
	$mail->SetFrom('<!-- YOUR EMAIL HERE -->', 'Class Organizer');
	$mail->AddBCC('<!-- OPTIONAL CO-ORGANIZER EMAIL HERE -->', 'Registrar');
	$mail->Subject = '[<!-- YOUR EVENT NAME HERE -->] Registration ID: ' . $transactID;
	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
	
	ob_start();
?>
<html>
	<head>
		<title><?= $mail->Subject; ?></title>
		<style>
		.header { text-align: right; font-weight: bold; }
		.underline { border-bottom: 3px solid #eee; padding-top: 20px; }
		.button {
			margin: 15px; padding: 5px 20px 5px 20px;
			border: 1px solid #666; border-radius: 20px; overflow: hidden;
			color: #444; text-decoration: none; font-size: 100%; font-weight: bold;
			background-color: #ddd;
			background: linear-gradient(top, rgb(238,238,238) 0%, rgb(204,204,204) 100%);
			text-shadow: white 1px 1px 2px;
		}
		</style>
	</head>
	<body>
		<?= print_r($_POST); ?><!-- For testing purposes -->
		<h3><!-- NAME OF EVENT --></h3>
		<h4><!-- LOCATION, DATE --></h4>
		<p style="clear:left; margin-top: 15px;">Thank you for your registration! Our Registrar has been notified of your selections, and will confirm class availability via an email to <?= $_POST['email']; ?>. Once confirmed, please send a check payable to '<!-- EXCHEQUER WILL TELL YOU-->' by <!-- DATE--> to:</p>
		<dl>
			<dt><!-- NAME--></dt>
			<dd><!-- STREET--></dd>
			<dd><!-- CITY-->, BC</dd>
			<dd><!-- POSTAL--></dd>
		</dl>
		<p>If paying for multiple registrations on one cheque, please include the order IDs. An event fee of <!-- FEE--> will be charged at gate; those with proof of SCA membership will receive a $5 discount. The event will be held at <!-- ADDRESS-->; please see the <a href="<!-- YOUR PAGE-->">calendar page</a> for additional site details and contacts.</p>
		<p>We look forward to seeing you there!</p>
		<table>
			<tr>
				<th class="header underline" colspan="2">Registration</th>
			</tr>
			<tr>
				<th class="header">Order ID:</th>
				<td><?= $transactID; ?></td>
			</tr>
			<tr>
				<th class="header">Name:</th>
				<td><?= $_POST['firstname']; ?> <?= $_POST['lastname']; ?></td>
			</tr>
			<tr>
				<th class="header">SCA Name:</th>
				<td><?= $_POST['scaname']; ?></td>
			</tr>
			<tr>
				<th class="header">Membership / Expiry:</th>
				<td><?= $_POST['membership']; ?> / <?= $_POST['expiry']; ?></td>
			</tr>
			<tr>
				<th class="header">Branch:</th>
				<td><?= $_POST['branch']; ?></td>
			</tr>
			<tr>
				<th class="header">Phone:</th>
				<td><?= $_POST['phone']; ?></td>
			</tr>
			<tr>
				<th class="header">Email:</th>
				<td><?= $_POST['email']; ?></td>
			</tr>
			<tr>
				<th class="header underline" colspan="2">Saturday Classes</th>
			</tr>
			<!-- Display class selections below. There must be one TR unit per drop-down on code.ph, and the label you use with _POST must match the ID of the select you're calling. -->
			<tr>
				<th class="header" ><!-- Start time--></th>
				<td><?= $_POST['block1']; ?></td>
			</tr>
			
			<!-- Copy and paste for additional class blocks ABOVE this line -->
			<tr>
				<th class="header" >Total:</th>
				<td>&#36;<?= $_POST['hiddencost']; ?></td>
			</tr>
		</table>
	</body>
</html>
<?
	$mail->MsgHTML(ob_get_clean());
	$mail->Send();
?>
<p>An email has been sent containing your class selection. Press 'back' to return to the schedule.
<?php
} catch (phpmailerException $e) {
	echo $e->errorMessage();  // Pretty error messages from PHPMailer.
} catch (Exception $e) {
	echo $e->getMessage();  // Boring error messages from anything else!
}

?>
<p><a href="<!-- YOUR REGISTRATION PAGE ADDRESS HERE-->" class=back>Back</a>
</body>
</html>

