<!DOCTYPE html><html lang=en>
<title>YOUR TUTR SESSION'S NAME HERE</title>
<link rel=stylesheet href=registration.css>

<script>
// This code is mostly to prevent someone selecting overlapping classes.
// You don't need one for every block, only the blocks that conflict with one another. If nothing overlaps, you can delete this entire section.
// Below are some examples of how this can work. This is somewhat advanced stuff; don't be afraid to ask me to help.
function dropdowns(block) {
	if ( block == 'block1' ) {
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 2)
		for ( let option of block2.options ) option.disabled = false
		
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 3)
		for ( let option of block3.options ) option.disabled = false
		
		// The third selection conflicts with selections 1, 2 and 3 in the second block, and selection 1 in the third block.
		if ( block1.selectedIndex == 3 ) {
			block2.options[1].disabled = true
			block2.options[2].disabled = true
			block2.options[3].disabled = true
			block3.options[1].disabled = true
		}
	
	} else if ( block == 'block2' ) {
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 1)
		for ( let option of block1.options ) option.disabled = false
		
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 3)
		for ( let option of block3.options ) option.disabled = false
		
		// The first and second selections conflicts with the third selection of block 1, and the first selection of block 3
		if ( block2.selectedIndex == 1 || block2.selectedIndex == 2 ) {
			block1.options[3].disabled = true
			block3.options[1].disabled = true
		}
		
		// The third selection conflicts with the third selection of block 1.
		if ( block2.selectedIndex == 3 ) block1.options[3].disabled = true
	
	} else if ( block == 'block3' ) {
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 1)
		for ( i=0; i < block1.length; i++ ) {
			block1.options[i].disabled = false
		}
		
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 2)
		for ( i=0; i < block2.length; i++ ) {
			block2.options[i].disabled = false
		}
		
		// The first selection conflicts with the third selection of block 1, and the first and second selection of block 2.
		if ( block3.selectedIndex == 1 ) {
			block2.options[1].disabled = true
			block2.options[2].disabled = true
			block1.options[3].disabled = true
		}
	}
}
</script>

<h1>TUTR SESSION TITLE HERE</h1>
<!-- If you want to write something about your session, such as when registration closes, where to send cheques to, or link to it's Calendar page, this is the place to do it. A date and location are probably bare minimums.-->

<section id=calendar>
	<table cellspacing=0>
		<!-- rowspan represents #hours: a 2 hour class will have a rowspan of 2. Delete the matching class for the other timeslots it covers. Example: your first track 1 class is 3 hours. Delete the lines for track 1 class 2 and track 1 class 3.-->
		<!-- colspan represents a break that spans all tracks. Put it in whatever timeslot you like; I've used pm just as an example.-->
		<!-- If there is a blank space where one track isn't doing anything, while others are, simply leave an empty <td></td> in the 'empty' time slot. You can use the class 'void', if using provided css.-->
		<tr>
			<th colspan=5>THE DAY</th> <!-- colspan is max # of tracks + 1 for the hour listing. 5 would accommodate 4 simultaneous classes. -->
		</tr>
		<tr>
			<th>9:00am</th>
			<td rowspan=1><a href="#class1h">A 1 Hour Class</a></td>
			<td rowspan=2><a href="#class2h">A 2 Hour Class</a></td>
			<td rowspan=3><a href="#">A 3 Hour Class</a></td>
			<td rowspan=4><a href="#">A 4 Hour Class</a></td>
		</tr>
		<tr>
			<th>10:00am</th>
			<td rowspan=1 class=void>A 1 Hour Gap</td>
		</tr>
		<tr>
			<th>11:00am</th>
			<td rowspan=2><a href="#">Another 2 Hour Class</a></td>
			<td rowspan=2 class="void">A 2 hour Void</td>
		</tr>
		<tr>
			<th>12:00pm</th>
			<td rowspan=1 class=void>A 1 Hour Gap</td>
		</tr>
		<tr>
			<th>1:00pm</th>
			<td colspan=6 class=lunch>LUNCH</td>
		</tr>
		<tr>
			<th>2:00pm</th>
			<td rowspan=2 colspan=2 class=void>Two tracks have a 2 hour gap</td>
			<td rowspan=2><a href="#">Class</a></td>
			<td rowspan=2><a href="#">Class</a></td>
		</tr>
		<tr>
			<th>3:00pm</th>
		</tr>
		<tr>
			<th>4:00pm</th>
			<td rowspan=2><a href="#">Class</a></td>
			<td rowspan=2><a href="#">Class</a></td>
			<td rowspan=2><a href="#">Class</a></td>
			<td rowspan=2><a href="#">Class</a></td>
		</tr>
		<tr>
			<th>5:00pm</th>
		</tr>
	</table>
</section>

<section id=details>
	<!-- This is where the details are hidden. You can copy from <div> to </div> on one of the examples below, and just paste and fill out the appropriate information. -->
	<!-- Copy from <details... to </details> below and update; the <details id> must be unique and referenced by the <a href> of the class' title, above. -->
	<details id="class1h">
		<summary><h2>A 1 Hour Class<!-- CLASS NAME --></h2></summary>
		
		<dl><!-- Place definitions in the <dd> below the value to define. -->
			<h3>Details</h3>
			
			<dt>Time
			<dd>0:00
			
			<dt>Instructor
			<dd>Don Don McDonald of Donaland
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Students
			<dd>27
		</dl>
		
		<p>
			<!-- CLASS DESCRIPTION - Use multiple <p>aragraphs as needed. -->
			Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper.
		
		<h3>Requirements/Materials</h3>
		<ol>
			<!-- STUDENT REQUIREMENTS/MATERIALS LIST -->
			<li>Sed posuere consectetur est at lobortis.
			<li>Nullam id dolor id nibh ultricies vehicula ut id elit.
			<li>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
			<li>Etiam porta sem malesuada magna mollis euismod.
			<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
		</ol>
	</details>
	<!-- Copy from </details> to <details... above. -->
	
	<details id="class2h">
		<summary><h2>A 2 Hour Class<!-- CLASS NAME --></h2></summary>
		
		<dl><!-- Place definitions in the <dd> below the value to define. -->
			<h3>Details</h3>
			
			<dt>Time
			<dd>0:00
			
			<dt>Instructor
			<dd>Don Don McDonald of Donaland
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Students
			<dd>27
		</dl>
		
		<p>
			<!-- CLASS DESCRIPTION - Use multiple <p>aragraphs as needed. -->
			Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper.
		
		<h3>Requirements/Materials</h3>
		<ol>
			<!-- STUDENT REQUIREMENTS/MATERIALS LIST -->
			<li>Sed posuere consectetur est at lobortis.
			<li>Nullam id dolor id nibh ultricies vehicula ut id elit.
			<li>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
			<li>Etiam porta sem malesuada magna mollis euismod.
			<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
		</ol>
	</details>
</section><!-- This ends the course details section; paste new class descriptions ABOVE this /section. -->

<section id=form><!-- Registration Form -->
	 <form action=submit.php method=post id=registration>
			<fieldset><!-- The outer fieldset, containing the details, day one classes, day two classes, and the cost/submit/reset fields. -->
				<legend><h2>Registration</h2></legend>
				
				<!-- Personal Details -->
				<!-- 'Personal' is a fieldset, rather than a div or span so we can css the 'Name' legend and 'firstname' 'lastname' labels differently. Name, phone and email fields. -->
				<fieldset class=personal>
					<legend>Name</legend>
					<dl>
						<div class=name>
							<dd><label for=firstname>First</label>
							<dt><input name=firstname id=firstname>
							
							<dd><label for=lastname>Last</label>
							<dt><input name=lastname id=lastname>
						</div>
						<div id=identity>
							<dt><label for=scaname>SCA name</label>
							<dd><input name=scaname id=scaname class=form-mid>
						</div>
						<div>
							<dt><label for=phone>Phone</label>
							<dd><input type=phone name=phone id=phone>
						</div>
						<div>
							<dt><label for=email>Email</label>
							<dd><input type=email name=email id=email autocapitalize=off autocorrect=off spellcheck=false pattern="^([a-z0-9\.\-+_!#$%&'\/=`|~?^{}*]+)@[\w]+([\w\.\-]+\w)?$">
						</div>
						<div>
							<dt><label for=branch>Branch</label>
							<dd><input name=branch id=branch>
						</div>
						<div>
							<dt><label for=membership>Membership #</label>
							<dd><input name=membership id=membership>
						</div>
						<div>
							<dt><label for=expiry>Membership Exp.</label>
							<dd><input name=expiry id=expiry>
						</div>
					</dl>
				</fieldset>

		<!-- Day 1 Classes -->
			<!-- Each start time has it's own Block. The 'label' is referred to by the JS code, so if it's different from the display name, make sure you use the LABEL name when editing JS.-->
			<!-- Copy from <div> to </div>, and paste as many times as needed. Ensure for="block1" is changed to 2, 3, etc, as is name="block1" and id="block1". -->
				<fieldset> <!-- Contains the class and cost fieldsets. -->
					<fieldset class=classes>
						<legend>Saturday 28th</legend>
						
						<dl>
							<!-- Copy from here...-->
							<div>
								<dt><label for=block1>Block 1:<br />9:00am Start</label>
								<dd><select name=block1 id=block1>
									<!-- Keep the Free Block option as the first in all blocks. -->
									<option selected>Free Block
									<option>Class 1
									<option>Class 2
									<option>Class 3
									<option>Class 4
								</select>
							</div>
							<!-- ... to here. -->
						</dl>
					</fieldset>
					
					<!-- Total cost and submit/reset -->
					<fieldset class=totals>
						<label>Total $:</label>
						<input type=text name=cost id=cost readonly>
						<input type=hidden name=hiddencost id=hiddencost value=0>
						<input type=submit value=Submit>
					</fieldset>
				</fieldset>
			</fieldset>
	</form>
</section>
<!-- END OF REGISTRATION CODE-->

<script src="script.js"></script><!-- Keep this at the end. -->
