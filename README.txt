Welcome to the University of Tir Righ's unofficial registration code. This code uses PHP to offer calendar and registration functions, including conflict-checking for overlapping classes, valid email addresses, and calculation of funds due. It cannot determine if a class has been filled or not; this will be up to the Dean to update.

If you have never seen an HTML or CSS page in your life, you can try to follow the instructions to edit. The main problem will be intimidation and understanding the design logic; if you have any difficulty, don't hesitate to email Cunegonda at dbevan@topfloor.ca, and she'll be happy to help.

Your package should include the following files:

code.php		A pre-made registration page.
class.phpmailer.php	Mailer code -- DO NOT EDIT
class.smtp.php		Mailer code -- DO NOT EDIT
script.js		Client-side scripting code.
submit.php		Mailer code + custom email
README.TXT		This file. Yep, you have it.

Please use a text editor such as Notepad++ (Windows) or CotEditor (Mac), or your preferred raw/plain text editor. DO NOT USE WORD. Word will insert formatting that will break things.

Before editing, it's advisable you save a backup copy, just in case. If you have PHP installed on your computer you can open a terminal, go to the directory containing these files, and run the following to start a "development time web server" to test without the need to upload to the actual web server:

	php -S '127.0.0.1:8088' -t .

Once this is running you can visit http://localhost:8080/code.php to examine your work.


=============================================
 1. CUSTOMIZE MAIN CALENDAR/REGISTRATION PAGE
=============================================

First of all, you’ll probably want to rename code.php to something more useful like index.php. If you’re familiar with CSS, you are welcome to muck about with the styling in the header, or link to a css file — what’s there is bare bones. If you aren’t going to import your own css file, delete the fourth line which reads: <link href="includes/style.css" type="text/css" rel="stylesheet”>. Don't forget to customize the title in the header, which defaults to ‘YOUR TUTR SESSION’S NAME HERE’.

Instructions for how to customize the conflict code are within the code.php file as comments with a number of examples intended to illustrate it’s use. These can (and should) be overwritten, or deleted entirely if there are no conflicts. A conflict is something like a 9am class that is two hours will prevent someone from signing up for a class beginning at 10am — and if they change their minds and de-select that 9am class, the 10am class becomes available again. If all your classes are in uniform 2 hour blocks, for example, there will never be conflicts and you don’t need that code.

The Calendar itself is simple enough to edit — it’s just a table. Once again, there are examples that can be overwritten.

Class Details is displayed using a definition list. Each one gets its own div. It’s important that they are in the order they appear in the calendar, left to right, top to bottom. Each one must have a unique ID; the example for cut and pasting is 1, but they should go up from there.

Finally, the form. The styling can be redone, inputs for personal information can be added or removed. Each start-time should have it’s own select/label combination, with options for each class that begins at that time. Always keep ‘Free Block’ as the first option. If you add or subtract an input, remember to add or subtract it in submit.php as well!

The total cost and submit button doesn't require modification. Neither does the script call at the bottom.

=============================================
 2. CUSTOMIZE SUBMIT.PHP
=============================================
There are three areas to edit on the submit page.

1) The Email sent out
2) Your email address
3) The html address for the 'back' button

The provided email is nothing more than an example. How you word and display it is entirely up to you. It's important to note that the form data students filled out isn't stored anywhere; this email is the only way you will receive it. Form data is displayed with the $_POST['id'] format. Thus it's important that you ensure that each class block gets included, editing the display label as well as the _POST id#. Other customizable elements in the email can be found by searching for <!--.

Below the email, after </html>, is some of the mailer code. There are three locations you will have to add your personal email address to -- the AddAddress, SetFrom, and AddReplyTo. Replace <!--YOUR EMAIL HERE--> with your email, so in the end it will look like, 'dbevan@topfloor.ca', ‘Class Organizer’. Your area may use a different title for the position, such as Registrar — feel free to edit that as well. There is an AddBCC line that can be deleted entirely if you have no co-organizer you want in on the registrations. Googling 'PHP Mailer' will provide additional information on how to edit this.

You can edit the subject line; right now it simply generates a random 4 digit number to allow for unique registration IDs.

Do NOT edit the Username and Password lines unless you have a proxy account to handle the forwarding. This SHOULD NOT be your personal email. My family provides the email currently used in the file; unless it winds up abused, it can be used for your event as well.

Finally, nearly at the bottom, you will have to find the Back Button, and put in the proper href. It may simply be “index.php”, if thats what you named your registration page.


=============================================
 2. CUSTOMIZE SCRIPT.JS
=============================================
The only area that needs modifying in SCRIPT.JS is the price array at the top. The format is:

prices["The drop-down's Label for the class"] = cost;

Example:

If the drop down selection is: <option label="Intro to Dance">Introduction to SCA Dance</option>
Then the prices entry would be: prices["Intro to Dance"] = 2.00;

There must always be one called 'Free Block' for 0.00. Order is irrelevant.

=============================================
 3. UPLOAD
=============================================

You will need to upload into the same directory the following files:

class.phpmailer.php
class.smtp.php
script.js
submit.php

plus your registration page, which may be code.php if you choose to use it as a default.


=============================================
 4. DOUBLE-CHECK INFORMATION
=============================================

- Click on every calendar entry, to determine that it brings up the correct information below. Class details must be listed in order, read across the table -- all 9am classes, from left to right, saturday to sunday first, for example. If they're pulling up the wrong class details, it's because it's out of order.

- Select every option in turn, while checking the prices to ensure it's correct. If there are any that are incorrect, this can be edited in script.js. 

- Attempt to select classes that overlap with others, and check to ensure they're greyed out and you're unable to select them. If this doesn't function properly, the script at the top of the page needs editing.

- Fill out an application and send it to yourself as a test. Use as many fields as possible. If the mailer simply flat out isn't functioning, ensure your registration page has been saved as .php, not .html. Ensure you didn't clip anything in a cut and paste. Ensure things are pasted in the correct locations. Ensure your email is correct in submit.php. And finally, if you've done all those things, come crying to me and I'll hit it with a wrench until it works.
