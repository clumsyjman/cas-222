<html lang="en">
   
	
	<head>
	
	<?php
include_once "includes/head.php";
?>
	</head>
   <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
     
	  
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
               <h2>Contact</h2>
                              <?php
	include ("includes/db.php");	             
                ?>
                
                <?php
	include ("includes/connection.php");	
?>

<br><br>
					         <h3>Packet pickup</h3>
	         <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
				<div class="social">
				<div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote></div>
	   <a class="twitter-timeline" data-lang="en" data-width="300" data-height="300" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
<form method="post" class="form1" action="">
<fieldset>
<legend >Contact Form</legend>
<table border="0" cellpadding="10" height= "250" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">Name:</label></div></td>
<td><input name="name" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="email">Email:</label></div></td>
<td><input name="email" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="affiliation">Are you an athlete,<br>volunteer or interested party?</label></div></td>
<td><select name="affiliation" /> 
            <option value="athlete">Athlete</option>
            <option value="volunteer">Volunteer</option>
            <option value="intrestedparty">Intrested Party</option>
       </select></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="question">Question/Comment:</label></div></td>
<td><input name="question" class="input" size="25" required /></td>
</tr> 
<tr>
	<br>
<td height="23"></td>
<td><div align="center">
  <input type="submit" name="submit" value="Contact!" />
</div></td>
</tr>
</table>
</fieldset>
</form>

	 

            </div>         			 
      
      </main>	 
	   <footer>
	   			 <?php
include_once "includes/footer.php";
?>
	   </footer>	
   </body>
</html>