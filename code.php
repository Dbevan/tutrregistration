<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>YOUR TUTR SESSION'S NAME HERE</title>
	<link href="registration.css" type="text/css" rel="stylesheet">
    <script language="JavaScript">
     // This code is mostly to prevent someone selecting overlapping classes.
     // You don't need one for every block, only the blocks that conflict with one another. If nothing overlaps, you can delete this entire section.
     // Below are some examples of how this can work. This is somewhat advanced stuff; don't be afraid to ask me to help.
        function dropdowns(block) {
            if (block=='block1') {
                for(i=0; i < document.registration.block2.length; i++) {
                    document.registration.block2.options[i].disabled=false; //If a selection is reset to Free Block (i=0), reset the conflicts (in block 2)
                }
                for(i=0; i < document.registration.block3.length; i++) {
                    document.registration.block3.options[i].disabled=false; //If a selection is reset to Free Block (i=0), reset the conflicts (in block 3)
                }
                if (document.registration.block1.selectedIndex==3){         //The third selection conflicts with selections 1, 2 and 3 in the second block, and selection 1 in the third block.
                    document.registration.block2.options[1].disabled=true;
                    document.registration.block2.options[2].disabled=true;
                    document.registration.block2.options[3].disabled=true;
                    document.registration.block3.options[1].disabled=true;
                }
            };
            if (block=='block2') {
        	    for(i=0; i < document.registration.block1.length; i++) {    //If a selection is reset to Free Block (i=0), reset the conflicts (in block 1)
                    document.registration.block1.options[i].disabled=false;
                }
                for(i=0; i < document.registration.block3.length; i++) {    //If a selection is reset to Free Block (i=0), reset the conflicts (in block 3)
                    document.registration.block3.options[i].disabled=false;
                }
                if (document.registration.block2.selectedIndex==1 || document.registration.block2.selectedIndex==2){        //The first and second selections conflicts with the third selection of block 1, and the first selection of block 3
                    document.registration.block1.options[3].disabled=true;
                    document.registration.block3.options[1].disabled=true;
                }
                if (document.registration.block2.selectedIndex==3){         //The third selection conflicts with the third selection of block 1.
                    document.registration.block1.options[3].disabled=true;
                }
            };
            if (block=='block3') {
        	    for(i=0; i < document.registration.block1.length; i++) {    //If a selection is reset to Free Block (i=0), reset the conflicts (in block 1)
                    document.registration.block1.options[i].disabled=false;
                }
                for(i=0; i < document.registration.block2.length; i++) {    //If a selection is reset to Free Block (i=0), reset the conflicts (in block 2)
                    document.registration.block2.options[i].disabled=false;
                }
                if (document.registration.block3.selectedIndex==1){         //The first selection conflicts with the third selection of block 1, and the first and second selection of block 2.
                    document.registration.block1.options[3].disabled=true;
                    document.registration.block2.options[1].disabled=true;
                    document.registration.block2.options[2].disabled=true;
                }
            };
         
        }
    </script>
</head>
<body>
    
    <h1>TUTR SESSION TITLE HERE</h1>
    <!-- If you want to write something about your session, such as when registration closes, where to send cheques to, or link to it's Calendar page, this is the place to do it. A date and location are probably bare minimums.-->
    
    <!-- Calendar -->
        <div class="calendar" id="caltop"><a name="calendar"></a>
                <table cellspacing="0" class="tc">
                    <!-- rowspan represents #hours: a 2 hour class will have a rowspan of 2. Delete the matching class for the other timeslots it covers. Example: your first track 1 class is 3 hours. Delete the lines for track 1 class 2 and track 1 class 3.-->
                    <!-- Colspan represents a break that spans all tracks. Put it in whatever timeslot you like; I've used pm just as an example.-->
                    <!-- If there is a blank space where one track isn't doing anything, while others are, simply leave an empty <td></td> in the 'empty' time slot. You can use the class 'void', if using provided css.-->
                    <tr>
                        <th colspan="5">THE DAY</th> <!-- Colspan is max # of tracks + 1 for the hour listing. 5 would accommodate 4 simultaneous classes. -->
                    </tr>
                    <tr>
                        <th>9:00am</th>
                        <td rowspan="1"><a href="#caltop">A 1 Hour Class</a></td>
                        <td rowspan="2"><a href="#caltop">A 2 Hour Class</a></td>
                        <td rowspan="3"><a href="#caltop">A 3 Hour Class</a></td>
                        <td rowspan="4"><a href="#caltop">A 4 Hour Class</a></td>
                    </tr>
                    <tr>
                        <th>10:00am</th>
                        <td rowspan="1" class="void">A 1 Hour Gap</td>
                    </tr>
                    <tr>
                        <th>11:00am</th>
                        <td rowspan="2"><a href="#caltop">Another 2 Hour Class</a></td>
                        <td rowspan="2" class="void">A 2 hour Void</td>
                    </tr>
                    <tr>
                        <th>12:00pm</th>
                        <td rowspan="1" class="void">A 1 Hour Gap</td>
                    </tr>
                    <tr>
                        <th>1:00pm</th>
                        <td colspan="6" class="lunch">LUNCH</td>
                    </tr>
                    <tr>
                        <th>2:00pm</th>
                        <td rowspan="2" colspan="2"  class="void">Two tracks have a 2 hour gap</td>
                        <td rowspan="2"><a href="#caltop">Class</a></td> 
                        <td rowspan="2"><a href="#caltop">Class</a></td>
                    </tr>
                    <tr>
                        <th>3:00pm</th>
                    </tr>
                    <tr>
                        <th>4:00pm</th>
                        <td rowspan="2"><a href="#caltop">Class</a></td>
                        <td rowspan="2"><a href="#caltop">Class</a></td>
                        <td rowspan="2"><a href="#caltop">Class</a></td>
                        <td rowspan="2"><a href="#caltop">Class</a></td>
                    </tr>
                    <tr>
                        <th>5:00pm</th>
                    </tr>
                </table>
        </div>
    <!-- Class Details -->
        <!-- This is where the details are hidden. You can copy from <div> to </div> on one of the examples below, and just paste and fill out the appropriate information.-->
        <div class="window">
            <!-- Copy from the div below -->
            <div ID="1" class="details">
                  <dl>
                      <dt><!-- CLASS NAME --></dt>
                          <dd>Time:</dd>
                          <dd>Instructor:</dd>
                          <dd>Fee:</dd>
                          <dd>#Students:</dd>
                  </dl>
                  <p>
                      <!-- CLASS DESCRIPTION -->
                  </p>
                  <p>
                      <!-- STUDENT REQUIREMENTS/MATERIALS LIST -->
                  </p>
            </div>
            <!-- to the div above -->
            
  
        </div><!-- This /div ends the details section, so paste new class descriptions ABOVE this /div. -->
        
    <!-- END OF CALENDAR CODE -->
    
    <!-- Registration Form -->
        <div>
             <form action="submit.php" method="post" name="registration" id="regform">
                    <fieldset> <!-- The outer field, containing the details, day one classes, day two classes, and the cost/submit/reset fields. -->
                        <legend class="fs-header"><span>Registration</span></legend>
            <!-- Personal Details -->
                        <fieldset class="personal"> <!-- 'Personal' is a fieldset, rather than a div or span so we can css the 'Name' legend and 'firstname' 'lastname' labels differently. Name, phone and email fields. -->
                                <legend>Name</legend>
                                <div class="fl shortname">
                                    <input type="text" name="firstname" id="firstname" class="form-short">
                                    <label for="firstname">First</label>
                                </div>
                                <div class="fl shortname">
                                    <input type="text" name="lastname" id="lastname" class="form-short">
                                    <label for="lastname">Last</label>
                                </div>
                                <div class="fl lift">
                                    <label for="scaname">SCA name</label>
                                    <input type="text" name="scaname" id="scaname" class="form-mid">
                                </div>
                                <div class="fl lift">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-short">
                                </div>
                                <div class="fl lift">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-short">
                                </div>
                                <div class="fl lift">
                                    <label for="branch">Branch</label>
                                    <input type="text" name="branch" id="branch" class="form-mid">
                                </div>
                                <div class="fl lift">
                                    <label for="membership">Membership #</label>
                                    <input type="text" name="membership" id="membership" class="form-short">
                                </div>
                                <div class="fl lift">
                                    <label for="expiry">Membership Exp.</label>
                                    <input type="text" name="expiry" id="expiry" class="form-short form-last">
                                </div>
                        </fieldset>
                <!-- Day 1 Classes -->
                    <!-- Each start time has it's own Block. The 'label' is referred to by the JS code, so if it's different from the display name, make sure you use the LABEL name when editing JS.-->
                    <!-- Copy from <div class="fl"> to </div>, and paste as many times as needed. Ensure for="block1" is changed to 2, 3, etc, as is name="block1" and id="block1". -->
                    <!-- Keep the Free Block option as the first in all blocks.-->
                        <fieldset> <!-- Contains the class and cost fieldsets-->
                            <fieldset class="classes">
                                <legend>Saturday 28th</legend>
                                <!-- Copy from here...-->
                                <div class="fl">
                                    <label for="block1">Block 1:<br />  9:00am Start</label>
                                    <select name="block1" class="fl block" id="block1" onChange="dropdowns('block1')">
                                        <option label="Free Block" selected value="">Free Block</option>
                                        <option label="Class 1">Class 1</option>
                                        <option label="Class 2">Class 2</option>
                                        <option label="Class 3">Class 3</option>
                                        <option label="Class 4">Class 4</option>
                                    </select>
                                </div>
                                <!-- ... to here. -->
                                
                            </fieldset>
                    
                <!-- Total cost and submit/reset -->
                            <div class="cl">
                                <label class="fl">Total $: </label>
                                <input type="text" name="cost" ID="cost" value="" class="fl">
                                <input type="hidden" name="hiddencost" id="hiddencost" value="0">
                                <input type="submit" value="Submit" class="fl">
                            </div>
                        </fieldset>
                    </fieldset>
            </form>
        </div>
<!-- END OF REGISTRATION CODE-->


<!-- These scripts get pasted after all the content, but before /body -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="script.js"></script>

</body></html>
