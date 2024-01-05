<!DOCTYPE html><html lang=en>
<title>YOUR TUTR SESSION'S NAME HERE</title>
<link rel=stylesheet href=registration.css>

<script>
function dropdowns(block) {
	if ( block == 'block4' ) {
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 5)
		for ( let option of block5.options ) option.disabled = false
		
		// The first, third, and fourth selection conflicts with selection 1 in the fifth block.
		if ( block4.selectedIndex == 1 || block4.selectedIndex == 3 || block4.selectedIndex == 4  ) {
			block5.options[1].disabled = true
		}
	
	} else if ( block == 'block5' ) {
		// If a selection is reset to Free Block (i=0), reset the conflicts (in block 4)
		for ( let option of block4.options ) option.disabled = false
		
		// The first selection conflicts with the first, third and fourth selection of block 4.
		if ( block5.selectedIndex == 1 ) {
			block4.options[1].disabled = true
			block4.options[3].disabled = true
			block4.options[4].disabled = true
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
			<th colspan=5>Saturday</th> <!-- colspan is max # of tracks + 1 for the hour listing. 5 would accommodate 4 simultaneous classes. -->
		</tr>
		<tr>
			<th>9:00</th>
			<td rowspan=2><a href="#fweave">Intro to Fingerweaving</a></td>
			<td rowspan=2><a href="#chpaint">Intro to Charter Painting</a></td>
			<td rowspan=2><a href="#thobe">Patterning a Thobe</a></td>
			<td rowspan=2><a href="#bowstr">Making a Flemish Twist Bowstring</a></td>
		</tr>
		<tr>
			<th>10:00</th>
		</tr>
		<tr>
			<th>11:00</th>
			<td rowspan=1><a href="#butt">Buttons</a></td>
			<td rowspan=1><a href="#calig">Spacing for Calligraphy</a></td>
			<td rowspan=1><a href="#doc">Intro to Documentation</a></td>
			<td rowspan=1><a href="#chiv">Chivalry &amp; Etiquette</a></td>
		</tr>
		<tr>
			<th>12:00</th>
			<td rowspan=1 colspan=4 class=void>Lunch</td>
		</tr>
		<tr>
			<th>13:00</th>
			<td rowspan=2><a href="#thread">Drawn Threadwork</a></td>
			<td rowspan=2><a href="#uncial">Uncial Calligraphy</a></td>
			<td rowspan=2><a href="#calc">Medieval Calculus</a></td>
			<td rowspan=2><a href="#bardic">Intro to Bardic &amp; Performing Arts</a></td>
		</tr>
		<tr>
			<th>14:00</th>
		</tr>
		<tr>
			<th>15:00</th>
			<td rowspan=2><a href="#sprang">Språng Basics</a></td>
			<td rowspan=1><a href="#runes">Intro to Reading &amp; Writing Runes</a></td>
			<td rowspan=2><a href="#book">Device Concealment Book</a></td>
			<td rowspan=2><a href="#dance">16th C. Italian Dance</a></td>
		</tr>
		<tr>
			<th>16:00</th>
			<td rowspan=1><a href="#survive">Events - Surviving &amp; Thriving</a></td>
		</tr>
		<tr>
			<th>17:00</th>
			<td rowspan=1 colspan=4 class=void>Potluck Preparation</td>
		</tr>
		<tr>
			<th>18:00</th>
			<td rowspan=1 colspan=4 class=void>Potluck</td>
		</tr>

		<tr>
			<th colspan=5>Sunday</th>
		</tr>
		<tr>
			<th>9:00</th>
			<td rowspan=2><a href="#tstitch">Tapestry Stitch</a></td>
			<td rowspan=2><a href="#vice">Vice with Cards &amp; Dice</a></td>
			<td rowspan=2><a href="#flatcap">Tudor/Renaissance Flat Cap</a></td>
			<td rowspan=2><a href="#spoons">Intro to Spoon Carving</a></td>
		</tr>
		<tr>
			<th>10:00</th>
		</tr>
		<tr>
			<th>11:00</th>
			<td rowspan=1><a href="#chevron">Fingerweaving Chevrons</a></td>
			<td rowspan=1><a href="#charter">Intro to Charter Design</a></td>
			<td rowspan=1><a href="#ice">Making Ice in the Desert</a></td>
			<td rowspan=1 class="void"></td>
		</tr>
		<tr>
			<th>12:00</th>
			<td rowspan=1 colspan=4 class=void>Lunch &amp; Cleanup</td>
		</tr>
	</table>
</section>

<section id=details>
	<details id=fweave data-price=2>
		<summary><h2>Fingerweaving Garters: an Introduction to Technique</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Halima al-Rakkasa
			
			<dt>Fee
			<dd>$2
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Make traditional braided garters for your hosen! Learn the basic way to make a wide flat braid by hand, and a quicker method (as taught by sashweaver Carol James) of fingerweaving braids such as that described by Margret Hald in her book, "Ancient Danish Textiles from Bogs and Burials", and still used in traditional band-braiding around the world today. We'll do the pattern which picks up from the same side only. This class is a prerequisite for the fingerweaving chevron patterns, which alternate the pick-up sides.
		<p>
			Instructor will provide yarn; sticks for the weaver's cross; tape to affix to a surface

		<h3>Requirements/Materials</h3>
		<ul>
			<li>nimble fingers
			<li>note-taking materials
			<li>scissors
			<li>anything else they desire
		</ul>
	</details>

	<details id=chpaint data-price=3>
		<summary><h2>Introduction to Charter Painting</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Aspasia Bevilacqua
			
			<dt>Fee
			<dd>$3
			
			<dt>№ Student Spaces
			<dd>10
		</dl>
		
		<p>
			This class will look at pre-printed charters and learn techniques in order to fill in areas, adding whitework, diapering and finishing touches to create a piece of quality work.
		<p>
			Charters are handed out to recipients from Shires to Kingdom for various recognitions. There is always a need for charter painters and I have found that this style of painting is really fun! Bring on the gouache!
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>gouache paints, brushes and/or other personal supplies if you have them
			<li>note-taking materials (phone cameras work well too)
		</ul>
	</details>

	<details id=thobe data-price=10>
		<summary><h2>Patterning a Mamluk Era Thobe (Arabic - dress, tunic)</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Marie bint Yussuf
			
			<dt>Fee
			<dd>$10
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Learn how to measure and pattern a Mamluk era Thobe (Arabic - dress/tunic) which will be suitable for gentles of any sex/gender.  The basic pattern taught can be adapted to use for the following regions:  el Andalus (Spain), the Maghreb (North Africa), southwest Asia, central Asia, the Balkans, northern India and parts of southeast Asia and for various time periods between the 9th to 16th Centuries.
		<p>
			The following information will be covered:
		<ol type=A>
			<li>variations in design & patterns
			<li>construction techniques
			<li>sex/gender differences in design, fabric and embellishments
			<li>shopping for and adapting/altering ready made garments
		</ol>
		<p>
			Handouts with pattern designs will be provided so that participants can record measurements.  At the end of the class, attendees will have enough information to make mock-ups and finished garments at home as well as how to shop for and adapt/alter ready made garments.  Also included will be fabric to create a mini-thobe.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>note-taking materials
			<li>measuring tape
			<li>needle
			<li>basting thread
			<li>fabric scissors
		</ul>
	</details>

	<details id=bowstr data-price=5>
		<summary><h2>How to Make a Flemish Twist Bowstring</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Kjartan kraka
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>8
		</dl>
		
		<p>
			Students will learn how to make a Flemish Twist bow string.  If they bring their own bows, they will come away with their own string.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring their own bows (important if you want a usable bow string
		</ul>
	</details>

	<details id=butt data-price=0>
		<summary><h2>Buttons</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Máel Brigte inghean Aimhirgin
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>10
		</dl>
		
		<p>
			Learn how to make two different types of buttons, thread wrapped and fabric, to finish off your raiment. These simple and versatile techniques can be used for basic closures or as embellishment, depending on materials and level of detail.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring scissors and needle (some will be available to borrow)
		</ul>
	</details>

	<details id=calig data-price=5>
		<summary><h2>Letter, Word & Linear Space for Calligraphy</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Taliesin ap Hafgan
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>8
		</dl>
		
		<p>
			Have you ever looked at a charter or scroll and wondered how they made it look so perfect and beautiful?  The eye sees the negative space created by letter, word and linear space and recognizes when the negative space flows smoothly and supports the calligraphy.  Many might suggest the negative space is as important as the Calligraphy itself.
		<p>
			This class will share basic concepts that were originally developed and calculated by the Roman Masons back in the 1st C BC, in creating the Roman or Imperial Capitals, originally for the carving of letters in stone.  These same letters are still taught as the printing Capital Letters taught in schools today.   These guiding principals govern spacing in most ‘hands’ of Calligraphy with little exception.
		<p>
			Suitable for teens through adults.  Open to younger youth if they are comfortable writing or printing a basic alphabet.  Not recommended for youth under 10 years of age.
		<p>
			Cost includes all materials, tools and templates. An exemplar and handout will be provided.
		<p>
			For this class the instructor will provide chisel nib felt pens for use in the class.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students are welcome to bring their own pens, ink and paper
			<li>if students prefer to use a regular nib, a C-2 Speedball nib or its equivalent is recommended
		</ul>
	</details>

	<details id=doc data-price=2>
		<summary><h2>Introduction to Documentation</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Alicia le Wilfulle & Beatris inghean Ghiolla Mhuire
			
			<dt>Fee
			<dd>$2
			
			<dt>№ Student Spaces
			<dd>10
		</dl>
		
		<p>
			Documentation is often considered the scariest part of entering A&S competitions, mostly because entrants don't know what information to include or how to organize it. This brief introductory class will help answer these questions and will cover the differences between documenting something you've made and writing a research paper. A handout will be provided for future reference.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring note taking materials
		</ul>
	</details>

	<details id=chiv data-price=1>
		<summary><h2>Chivalry and Etiquette: How to behave in the SCA (Novus 1)</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Meagan ferch Meredydd
			
			<dt>Fee
			<dd>$1
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			Learn the basics of chivalry, courtesy, and etiquette, the behaviour guidelines for polite society within our SCA community. This includes the SCA expectation of honourable conduct; embracing Diversity, Equity, and Inclusion (DEI); Mistress Diana Listmaker's 10 rules; basic forms of address; how to bow/curtsy; the culture of kindness; respect for the Herald; the need to respect safety and site rules: and basic behaviour in Courts and Audiences.

	</details>

	<details id=thread data-price=3>
		<summary><h2>Drawn Threadwork</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>13:00
			
			<dt>Instructor
			<dd>Máel Brigte inghean Aimhirgin
			
			<dt>Fee
			<dd>$3
			
			<dt>№ Student Spaces
			<dd>10
		</dl>
		
		<p>
			Drawn threadwork is a type of whitework that was - and still is - used throughout multiple cultures that involves removing threads from a woven piece of fabric. The void areas are then embellished with stitches to create a decorative motif. Students will learn about how it was used in period and create a sampler of drawn thread embroidery techniques.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring sharp embroidery scissors and a needle
		</ul>
	</details>

	<details id=uncial data-price=10>
		<summary><h2>Uncial Calligraphy</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>13:00
			
			<dt>Instructor
			<dd>Taliesin ap Hafgan
			
			<dt>Fee
			<dd>$10
			
			<dt>№ Student Spaces
			<dd>8
		</dl>
		
		<p>
			Uncials, introduced in the 3rd Century is a majuscule alphabet (upper case only), historically used by monks for the writing of religious books and manuscripts.  Uncial’s broad single stroke letters use simple round forms, taking advantage of the newly available parchment and vellum surfaces, as opposed to the angular, multiple stroke letters more suited to the rougher surfaces previously available.
		<p>
			Students will be introduced to the basic Uncial alphabet and how to form each of the letters of the alphabet.
		<p>
			Suitable for teens through adults.  Open to younger youth if they are comfortable writing or printing a basic alphabet.  Not recommended for youth under 10 years of age.
		<p>
			Cost includes all materials, tools and templates. An exemplar and handout will be provided.
		<p>
			For this class the instructor will provide chisel nib felt pens for use in the class.  
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students are welcome to bring their own pens, ink and paper
			<li>if students prefer to use a regular nib, a C-2 Speedball nib or its equivalent is recommended
		</ul>
	</details>

	<details id=calc data-price=2>
		<summary><h2>Medieval Calculus for the Mathematically Uninclined</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>13:00
			
			<dt>Instructor
			<dd>Shahar Mulji
			
			<dt>Fee
			<dd>$2
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Math was just as important to pre-16th century people as it is today. They used advanced mathematics, such as calculus, to track the movement of planets and stars as far back as 350BC. In this class we will discuss the theory and history of calculus, work through three examples of ancient calculus, and discuss the historical context of each example. This class is designed to be approachable to anyone, no matter their mathematical skills or experience, so bring your pencils and have fun in a math class!
		
		<h3>Requirements/Materials</h3> <!— If there are none, delete from <h3> to </ol> -->
		<ul>
			<li>students should bring a pencil and eraser
		</ul>
	</details>

	<details id=bardic data-price=0>
		<summary><h2>Introduction to Bardic and Performing Arts</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>13:00
			
			<dt>Instructor
			<dd>Theodora van Zeeland
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			In this class we will explore some of the varied delights of Bardic and other Performance Arts in the SCA. There will be opportunities to try different musical instruments, singing in a group, collaborative storytelling, and more.
		<p>
			This is a participation class! Every student will be in the audience and those who wish to, will join in group activities.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring positive energy and a willingness to try new things
		</ul>
	</details>

	<details id=sprang data-price=30>
		<summary><h2>Språng Basics: Make a Bag</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>15:00
			
			<dt>Instructor
			<dd>Halima al-Rakkasa
			
			<dt>Fee
			<dd>$30
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Dip your fingers into the magic that is making språng fabric. This is the start of the journey with basic interlinking, useful for cushioned pouches for pottery and other treasures. Språng is a medieval (and older) technique that, with the other techniques of interlacing and intertwining, becomes a life-long textile adventure from lace to double-cloth. In this class, we make a useful pouch with eyelet drawstring holes.
		<p>
			Class fee includes all needed equipment except scissors.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>student should bring note-taking materials and scissors
		</ul>
	</details>

	<details id=runes data-price=10>
		<summary><h2>Introduction to Reading and Writing with Runes</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>15:00
			
			<dt>Instructor
			<dd>Kjartan kraka
			
			<dt>Fee
			<dd>$10
			
			<dt>№ Student Spaces
			<dd>10
		</dl>
		
		<p>
			Students will receive a copy of the primary reader “Fun with Bjorn and Isa” and learn how to read and write Germanic (Futhark) runes.
		
		<h3>Requirements/Materials</h3>
		<ol>
			<li>Students should bring note taking materials.
		</ol>
	</details>

	<details id=book data-price=5>
		<summary><h2>Device Concealment Book</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>15:00
			
			<dt>Instructor
			<dd>Diamanté da Magenta
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Each student will be provided with a book partially prepared to become a device concealment book. They will continue to finish their book in class and later at home if required.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>school glue
			<li>paintbrush
			<li>xacto knife or sharp craft knife
			<li>item(s) to be concealed (cell phone)
		</ul>
	</details>

	<details id=dance data-price=0>
		<summary><h2>16th C Italian Dance 101/102</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>15:00
			
			<dt>Instructor
			<dd>Nicholas Worthington
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			This class combines two sessions which each teaches the steps and choreography for one dance. In 101 students will learn Contrapasso, a dance for three person sets in a moderate tempo. In 102 they will learn Bella Gioiosa, three person sets with a more sprightly tempo.
		<p>
			Some dance experience is useful but not required. Students are encouraged to pre-study the dances at <a href="https://mrnouveau.blogspot.com/p/dance-resources-for-dancing-in-sca.html">Dance Resources for SCA</a>.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should wear flexible shoes
		</ul>
	</details>

	<details id=surive data-price=0>
		<summary><h2>Events: Surviving & Thriving (Novus 1)</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>16:00
			
			<dt>Instructor
			<dd>Aniko Melyes
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			This course introduces students to the range of event types found within the SCA, giving guidelines as to what kinds of things happen at different kinds of events and how to be prepared for them. This course will help the student:
		<ul>
			<li>understand the basic types of events: Day; Tourney/Camping; War; Feast; educational (TUTR/Ithra/etc.)
			<li>understand that their comfort depends upon them to bring what they need, or otherwise arrange for their needs to be met ahead of time
			<li>recognize the differing requirements for each type of event: feast gear where there is feasting; cooking gear where they need to prepare their own; clothing for all weather when camping; shelter for camping; etc
			<li>know to bring SCA membership card, ID, money
			<li>learn about packing lists to ensure their needs and wants are packed
		</ul>
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>student should bring note taking materials
		</ul>
	</details>

	<details id=tstitch data-price=5>
		<summary><h2>Bayeux Tapestry Stitch</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Yrsa Ketilsdottir
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>5
		</dl>
		
		<p>
			Come and create a sampler in the style of the Bayeaux Tapestry Stitch. You will receive all materials needed to create this sampler and learn the stitches required. You can then take the remainder of the sampler and materials home to finish your creation!
		<p>
			Those who successfully finish a sampler are welcome to volunteer to work on a piece of the Seagirt Tapestry and add to the embroidered history of the Barony.
		
		<h3>Requirements/Materials</h3>
		<ol>
			<li>students should bring scissors if they can
		</ol>
	</details>

	<details id=vice data-price=0>
		<summary><h2>Pre-modern Vice with Cards and Dice</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Nicholas Worthington
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			In this class students will learn 2-3 period card games and a quick dice game
		
	</details>

	<details id=flatcap data-price=2>
		<summary><h2>Tudor/Renaissance Flat Cap</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Diamanté da Magenta
			
			<dt>Fee
			<dd>$2
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Students will learn/review and use two basic stitches used in SCA Period garment construction – the running stitch and the whip stitch.  They will use simple millinery methods to design and create a custom fitting Flat Cap.
	
		<h3>Requirements/Materials</h3>
		<ul>
			<li>measuring tape or ruler
			<li>scissors
			<li>pins
			<li>needles
			<li>thread
			<li>1/2 meter of fabric. Ideal fabric choices: gabardine, denim, brocade, felt wool, cotton flannel, twill, linen (light upholstery weight works best)
		</ul>
	</details>

	<details id=spoons data-price=5>
		<summary><h2>Introduction to Spoon Carving</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>9:00
			
			<dt>Instructor
			<dd>Kjartan kraka
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>8
		</dl>
		
		<p>
			Students will learn how to safely carve a wooden spoon using hand tools (supplied by instructor for use in the class).
		
	</details>

	<details id=chevron data-price=2>
		<summary><h2>Fingerweaving Garters: Chevron Technique</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Halima al-Rakkasa
			
			<dt>Fee
			<dd>$2
			
			<dt>№ Student Spaces
			<dd>6
		</dl>
		
		<p>
			Make traditional braided garters for your hosen! Prerequisite is the fingerweaving intro class. Take your skills to another level by using both hands to create chevrons and counter-chevrons with the Carol James technique. These braids produce the same effect as those described by Margret Hald in her book, "Ancient Danish Textiles from Bogs and Burials", and still used in traditional band-braiding around the world today.
		<p>
			Instructor will supply yarn; sticks for the weaver's cross; tape to affix to a surface.
		<p>
			Students MUST have completed "Fingerweaving Garters: an Introduction to Technique" (either Saturday morning or at Court d’Argent).		
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>nimble fingers
			<li>note-taking materials
			<li>scissors
			<li>anything else they desire
		</ul>
	</details>

	<details id=charter data-price=5>
		<summary><h2>Introduction to the Basics of Charter (Scroll) Design</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Taliesin ap Hafgan
			
			<dt>Fee
			<dd>$5
			
			<dt>№ Student Spaces
			<dd>8
		</dl>
		
		<p>
			Have you often thought?  … I would like to try designing a charter (or Scroll) for the upcoming reign?  This class is an introduction to the basics of charter design that can be applied to either the Principality or the Kingdom.
		<p>
			We will have a look at the basic parameters of a charter, even before you start with the artwork.  We will look at the basics of layout, materials and tools.  Cost covers all materials, tools and template as well as a handout. 
		<p>
			Suitable for teens through adults.  Not recommended for youth under 10 years of age.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring their own 12” (or longer) ruler.
			<li>if you have a concept for your artwork (Inspiration Source) you are welcome to bring it along, as there will likely be time at the end of the class to start the process
		</ul>
	</details>

	<details id=ice data-price=0>
		<summary><h2>Making Ice in the Desert; the Persian Yatchel and how it works</h2></summary>
		
		<dl>
			<h3>Details</h3>
			
			<dt>Time
			<dd>11:00
			
			<dt>Instructor
			<dd>Maryam (“Marie”) bint Yussuf al Nasrani
			
			<dt>Fee
			<dd>$0
			
			<dt>№ Student Spaces
			<dd>20
		</dl>
		
		<p>
			This class describes the various parts of the yatchal and how they were built.  It includes discussion on basic materials used; describes the atmospheric conditions necessary to make ice;  describes the various steps for making ice and storing it; and a brief description of the physics behind why a yatchel can make ice.
		
		<h3>Requirements/Materials</h3>
		<ul>
			<li>students should bring note-taking materials
		</ul>
	</details>
</section><!-- This ends the course details section; paste new class descriptions ABOVE this /section. -->

<section id=form><!-- Registration Form -->
	 <form action=submit.php method=post id=registration>
			<fieldset><!-- The outer fieldset, containing the details, day one classes, day two classes, and the cost/submit/reset fields. -->
				<legend><h2>Registration</h2></legend>
				
				<!-- Personal Details -->
				<!-- 'Personal' is a fieldset, rather than a div or span so we can css the 'Name' legend and 'firstname' 'lastname' labels differently. Name, phone and email fields. -->
				<dl>
					<div class=name>
						<dt><label for=firstname>First Name</label>
						<dd><input name=firstname id=firstname>
						<dt><label for=lastname>Last Name</label>
						<dd><input name=lastname id=lastname>
					</div>
					<div id=identity>
						<dt><label for=scaname>SCA name</label>
						<dd><input name=scaname id=scaname>
						<dt><label for=branch>Branch</label>
						<dd><input name=branch id=branch>
					</div>
					<div>
						<dt><label for=phone>Phone</label>
						<dd><input type=phone name=phone id=phone>
						<dt><label for=email>Email</label>
						<dd><input type=email name=email id=email autocapitalize=off autocorrect=off spellcheck=false pattern="^([a-z0-9\.\-+_!#$%&'\/=`|~?^{}*]+)@[\w]+([\w\.\-]+\w)?$">
					</div>
					<div>
						<dt><label for=membership>Membership #</label>
						<dd><input name=membership id=membership>
						<dt><label for=expiry>Membership Exp.</label>
						<dd><input name=expiry id=expiry>
					</div>
				</dl>
				
				<fieldset> <!-- Contains the class and cost fieldsets. -->
					<fieldset class=classes>
						<legend>Saturday</legend>
						
						<dl>
							<div>
								<dt><label for=block1>Block 1:<br />9:00 Start</label>
								<dd><select name=block1 id=block1>
									<option value="" selected>Free Block
									<option value=fweave>Fingerweaving
									<option value=chpaint>Charter Painting
									<option value=thobe>Patterning a Thobe
									<option value=bowstr>Flemish Bowstring
								</select>
							</div>
							<div>
								<dt><label for=block2>Block 2:<br />11:00 Start</label>
								<dd><select name=block2 id=block2>
									<option value="" selected>Free Block
									<option value=butt>Buttons
									<option value=calig>Spacing for Calligraphy
									<option value=doc>Documentation
									<option value=chiv>Chivalry &amp; Etiquette
								</select>
							</div>
							<div>
								<dt><label for=block3>Block 3:<br />13:00 Start</label>
								<dd><select name=block3 id=block3>
									<option value="" selected>Free Block
									<option value=thread>Drawn Threadwork
									<option value=uncial>Uncial
									<option value=calc>Calculus
									<option value=bardic>Bardic Arts
								</select>
							</div>
							<div>
								<dt><label for=block4>Block 4:<br />15:00 Start</label>
								<dd><select name=block4 id=block4>
									<option value="" selected>Free Block
									<option value=sprang>Språng
									<option value=runes>Read/Write Runes
									<option value=book>Concealment Book
									<option value=dance>Italian Dance
								</select>
							</div>
							<div>
								<dt><label for=block5>Block 5:<br />16:00 Start</label>
								<dd><select name=block5 id=block5>
									<option value="" selected>Free Block
									<option value=survive>Surviving Events
								</select>
							</div>
						</dl>
					</fieldset>
					<fieldset class=classes>
						<legend>Sunday</legend>
						
						<dl>
							<div>
								<dt><label for=block6>Block 6:<br />9:00 Start</label>
								<dd><select name=block6 id=block6>
									<option value="" selected>Free Block
									<option value=tstitch>Bayeux Stitch
									<option value=vice>Cards &amp; Dice
									<option value=flatcap>Tudor Flat Cap
									<option value=spoons>Spoon Carving
								</select>
							</div>
							<div>
								<dt><label for=block7>Block 7:<br />11:00 Start</label>
								<dd><select name=block7 id=block7>
									<option value="" selected>Free Block
									<option value=chevron>Fingerweaving Chevrons
									<option value=charter>Charter Design
									<option value=ice>Ice in the Desert
								</select>
							</div>
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
