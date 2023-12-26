<html>
<head>
<title>PHPMailer - SMTP (Gmail) advanced test</title>
</head>
<body>

<?php

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$transactID = rand ( 1000 , 5000 );
ob_start();
?>
<html>
   <head>
       <style>
           .header { text-align:right; font-weight:bold }
           .underline {border-bottom: 3px solid #eee; padding-top: 20px;}
           .button { margin: 15px; padding: 5px 20px 5px 20px; 
               border: 1px solid #666; border-radius: 20px; overflow: hidden; 
               color: #444; text-decoration:none; font-size: 100%; font-weight: bold;
               background-color: #ddd; 
               -moz-border-radius: 20px; 
               -webkit-border-radius: 20px; 
               -khtml-border-radius: 20px;  
               background: rgb(238,238,238); 
               background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); 
               background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,238,238,1)), color-stop(100%,rgba(204,204,204,1)));  
               background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); 
               background: -o-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); 
               background: -ms-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); 
               background: linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); 
               text-shadow:white 1px 1px 2px;}
       </style>
   </head>
   <body>
       <?= print_r($_POST); ?> <!-- For testing purposes -->
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
	            <td><?php echo $transactID; ?></td>
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

<?=
$body = ob_get_clean();
    
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->SMTPDebug  = 0;                     // Set to 2 for debug. enables SMTP debug information (for testing) 
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "secure.emailsrvr.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "sca@topfloor.ca";  // GMAIL username
  $mail->Password   = "juytrRdJ6Fs3";            // GMAIL password
  $mail->AddAddress($_POST['email'], 'Student');
  $mail->AddAddress('<!-- YOUR EMAIL HERE -->', 'Class Organizer');
  $mail->SetFrom('<!-- YOUR EMAIL HERE -->', 'Class Organizer');
  $mail->AddBCC('<!-- OPTIONAL CO-ORGANIZER EMAIL HERE -->', 'Registrar');
  $mail->Subject = '[<!-- YOUR EVENT NAME HERE -->] Registration ID:'.$transactID;
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
//  $mail->MsgHTML(file_get_contents('mail.html'));
$mail->MsgHTML($body);

//  $mail->AddAttachment('images/phpmailer.gif');      // attachment
//  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment

//  ob_start();
//  include "mail.html";
//  $mail->MsgHTML(ob_get_clean());

  $mail->Send();
?>
<p style="padding:5px; font-size=120%;">An email will be sent to you shortly containing your class selection. Press 'Back' to return to the schedule.</p>

<?php
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

?>
<p><a href="<!-- YOUR REGISTRATION PAGE ADDY HERE-->" class="back">Back</a></p>
</body>
</html>
