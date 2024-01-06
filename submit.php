<html>
<title></title>
<?php

$courses = array(
		"fweave" => "Intro to Fingerweaving",
		"chpaint" => "Intro to Charter Painting",
		"thobe" => "Patterning a Thobe",
		"bowstr" => "Making a Flemish Twist Bowstring",
		"butt" => "Buttons",
		"calig" => "Spacing for Calligraphy",
		"doc" => "Intro to Documentation",
		"chiv" => "Chivalry & Etiquette",
		"thread" => "Drawn Threadwork",
		"uncial" => "Uncial Calligraphy",
		"calc" => "Medieval Calculus",
		"bardic" => "Intro to Bardic & Performing Arts",
		"sprang" => "Språng Basics",
		"runes" => "Intro to Reading & Writing Runes",
		"book" => "Device Concealment Book",
		"dance" => "16th C. Italian Dance",
		"survive" => "Events - Surviving & Thriving",
		"tstitch" => "Tapestry Stitch",
		"vice" => "Vice With Cards & Dice",
		"flatcap" => "Tudor/Renaissance Flat Cap",
		"spoons" => "Intro to Spoon Carving",
		"chevron" => "Fingerweaving Chevrons",
		"charter" => "Intro to Charter Design",
		"ice" => "Making Ice in the Desert",
	);

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
	$mail->Subject = '[Hartwood TUTR 2024] Registration ID: ' . $transactID;
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
		<p style="clear:left; margin-top: 15px;">
			Thank you for your registration! Our Registrar has been notified of your selections, and will confirm class availability via an email to <?= $_POST['email']; ?>. Students will pay the instructors directly at the beginning of class. Please bring exact cash if at all possible.
		<p>
			An event fee of <!-- FEE--> will be charged at gate; those with proof of SCA membership will receive a $5 discount. The event will be held at the Navy League of Canada Hall at 949 5th St, Nanaimo, BC V9R, Canada.
		<p>
			For enquiries about classes, contact the registrar <a href="mailto:hartwood.tutr@tirrigh.org">by email</a>. For enquiries about the event itself, please email or visit the <a href="https://fb.me/e/4ZIiJU1js">Facebook page</a> for additional site details and contacts.
		<p>
			We look forward to seeing you there!
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
		</table>
			<!-- Display class selections below. There must be one TR unit per drop-down on code.ph, and the label you use with _POST must match the ID of the select you're calling. -->
		<h3>Saturday, Feb 3rd</h3>
		<table>
			<tr>
				<th class="header">09:00</th>
				<td><?= $courses[$_POST['block1']]; ?></td>
			</tr>
			<tr>
				<th class="header">11:00</th>
				<td><?= $courses[$_POST['block2']]; ?></td>
			</tr>
			<tr>
				<th class="header">13:00</th>
				<td><?= $courses[$_POST['block3']]; ?></td>
			</tr>
			<tr>
				<th class="header">15:00</th>
				<td><?= $courses[$_POST['block4']]; ?></td>
			</tr>
			<tr>
				<th class="header">16:00</th>
				<td><?= $courses[$_POST['block5']]; ?></td>
			</tr>
		</table>
		<h3>Sunday, Feb 4rd</h3>
		<table>
			<tr>
				<th class="header">09:00</th>
				<td><?= $courses[$_POST['block6']]; ?></td>
			</tr>
			<tr>
				<th class="header">11:00</th>
				<td><?= $courses[$_POST['block7']]; ?></td>
			</tr>
			
			<!-- Copy and paste for additional class blocks ABOVE this line -->
			<tr>
				<th class="header">Total:</th>
				<td>&#36;<?= $_POST['cost']; ?></td>
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

