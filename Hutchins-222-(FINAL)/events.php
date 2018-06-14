<html lang="en">
   
	
	<head>
	
	<?php
include_once "includes/head.php";
?>
	</head>
   <body>

     
	  
	   <main>		 
		   		   <?php
include_once "includes/nav.php";
?>

            <article class="hero-section">
               <section class="hero-section-text">
                  <h1>Ace in the Hole<br><br>Multisport Events</h1>
                 
               </section>
            </article>
         <div class="the-text">
			       <h2>Events</h2>
<div class="events">
	                              <?php
	include ("includes/db.php");	             
                ?>
                
                <?php
	include ("includes/connection2.php");	
?>
	<br><br>
	            <h2>About the Event</h2>
			 <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

			 <P>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</P>
			 
			 <h2>What to Bring</h2>
			 <p>Watch the weather closely.  The show goes on no matter what the weather is doing.</p>
			 <p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
			 <p><b>Swim:</b>  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>
			 <p> <b>Bike: </b> A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
			 <p><b>Run:</b>  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they donít have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
			 <p>Remember to bring a change of clothing so you can enjoy the post-event festivities. </p>

				   <h2>Register!</h2>
	<form method="post" class="form2" action="">
<fieldset>
<legend>Registration Form</legend>
<table border="0" cellpadding="10" height= "250" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg2;?></td>
</tr>
	<br>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name2">Name:</label></div></td>
<td><input name="name2" type="text" class="input" size="25" required /></td>
</tr>
	
<tr>
<td style="font-weight: bold"><div align="right"><label for="email2">Email:</label></div></td>
<td><input name="email2" type="email" class="input" size="25" required /></td>
</tr>
	
				<tr>
<td style="font-weight: bold"><div align="right"><label for="phone_number">Phone Number:</label></div></td>
<td><input name="phone_number"  type="text" class="input" size="25" required /></td>
</tr> 

<tr>
<td style="font-weight: bold"><div align="right"><label for="affiliation2">Are you an athlete or volunteer?</label></div></td>
<td><select name="affiliation2" /> 
            <option value="athlete">Athlete</option>
            <option value="volunteer">Volunteer</option>
       </select>
	</td>
</tr>

<tr>
<td style="font-weight: bold"><div align="right"><label for="satevents">Saturday event registering for:</label></div></td>
<td><select name="satevents" required />
	 <option value="Long_Course_Triathlon:_7:00_AM">Long Course Triathlon: 7:00 AM</option>
     <option value="Half Marathon 7:15 AM">Half Marathon 7:15 AM </option>
	<option value="Olympic Triathlon: 7:30 AM">Olympic Triathlon: 7:30 AM</option>
	<option value="10K: 7:15 AM">10K: 7:15 AM </option>
	<option value="none">none</option>
       </select>
	
	</td>
</tr> 
<br>
	<tr>
<td style="font-weight: bold"><div align="right"><label for="sunevents">Sunday event registering for:</label></div></td>
<td><select name="sunevents" required />
	 <option value="Sprint Triathlon: 8:00 AM">Sprint Triathlon: 8:00 AM</option>
     <option value="Try-a-Tri: 8:20 AM">Try-a-Tri: 8:20 AM </option>
	<option value="Splash n Dash: 12:00 PM">Splash n Dash: 12:00 PM</option>
		<option value="none">none</option>
       </select>
	
	</td>
		</tr>
	<br><br>
	<tr>
<td style="font-weight: bold"><div align="right"><label for="shirt">T-shirt size:</label></div></td>
<td><input name="shirt" placeholder="(XS-XXXXL)" type="text" class="input" size="25" required /></td>
</tr> 

		<tr>
<td style="font-weight: bold"><div align="right"><label for="gender">Gender:</label></div></td>
<td><select name="gender" /> 
            <option value="male">Male</option>
            <option value="Female">Female</option>
	        <option value="Non-Binary">Non-Binary</option>
       </select></td>
</tr> 
	
			<tr>
<td style="font-weight: bold"><div align="right"><label for="econtact">Emergency contact name:</label></div></td>
<td><input name="econtact" type="text" class="input" size="25" required /></td>
</tr> 
	
				<tr>
<td style="font-weight: bold"><div><label for="econtactp">Emergency contact phone number:</label></div></td>
<td><input name="econtactp" type="text" class="input" size="25" required /></td>
</tr> 
	
	
<tr>
<td height="23"></td>
<td><div align="center">
  <input type="submit" name="submit2" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>
<h2>Starting Times</h2>
                   <ul>
					<li><b>Saturday </b></li>
				   <li>Long Course Triathlon: 7:00AM</li>
				   <li>Olympic: 7:30 AM </li>
				   <li>10k: 7:15 AM </li>
				   <li>Half Marathon: 7:15 AM </li>
					   <br><br>
				   <li><b>Sunday </b></li>
				   <li>Sprint Triathlon: 8:00 AM</li>
				   <li>Try-a-Tri: 8:20 AM</li>	
					   <li>Splash n Dash: 12:00 PM</li>   
				   
				   </ul>
	<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" >PORTLAND WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

	         <h2>Course Details</h2>
	         <p><b>WATER TEMPERATURE</b> is expected to be between 62 and 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
	<P><b>The Splash and Dash</b> - is a 100 yard swim and a 50 meter dash for kids ages 6 to 12. It is free if an adult signs up and $25 if they don't.</P>
	<p><b>Long Course SWIM 1.2mi</b> - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
	<p><b>Long Course BIKE 58 Miles:</b> A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </p>
	<p><b>Long Course RUN 13.1mi</b> - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
	<p><b>OLYMPIC SWIM  1,500 meters</b> - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
	<P><b>OLYMPIC BIKE  28mi</b> - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </P>
	<P><b>OLYMPIC RUN  10K</b> - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</P>
	         <p><b>Sprint:</b> Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
	<p><b>Try-A-Tri:</b> This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p><br><br>
	
	
				  </div>

				
		<br><br><br><hr><br><br><br>		

	
			 </div> 
			 
         </div>      			 
      
      </main>	 
	   <footer>
	   			 <?php
include_once "includes/footer.php";
?>
	   </footer>	
   </body>
</html>