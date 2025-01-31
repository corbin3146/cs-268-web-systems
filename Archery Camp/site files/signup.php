<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<?php
    	$pageName = "Signup";
    	$cssFile = "signup";
        include "common_elements.php";
    	?>
    </head>
    
    <body>
    	<header>
    		<h1>Signup</h1>
    	</header>
    	<?php
    		echo $navBar;
    	?>	
    	<h2>Thank you for your interest in Archery Camp. </h2>
    	<p>Due to planning concerns and space limitations, please RSVP below <b>and have the following forms prepared before your arrival at camp.</b> 
    	If you do not RSVP, we can not guarantee we will have food and space for your child</p>
    	<!-- discuss with matt acessability(no printer, or pc) -->
    	<p><b>Please complete the following items and bring the completed forms to camp.</b></p>
    	<ol style="margin-left:2em">
    		<li><a href = "forms/MWRAC%20Registration%20Form.docx" download>registration</a></li>
    		<li><a href = "forms/MWRAC%20Health%20Form.docx" download>Health history and emergency home contact</a></li>
    		<li>RSVP!</li>
    	</ol>
    	
    	<script>
			function notSubmitted(){
				alert("Form not submitted, information collection is not yet setup. Sorry for the inconvenience.");
			}
    	</script>
    	
    	
    	<form method = "POST">
    		<h2>RSVP HERE!</h2>
    		<div id="basic-info-form">
        		<label for = "fname">First Name:</label>
        		<input type="text" id="fname" name="fname" class = "required" required><br>
        		
        		<label for = "lname">Last Name:</label>
        		<input type="text" id="lname" name="lname" class = "required" required><br>
        		
        		
        		<label for = "b-date">Date of Birth:</label>
        		<input type="date" id="b-date" name="b-date" class = "required" required><br>
    		 
        		
        		<label for = "address">Home Address:</label>
        		<input type="text" id="address" name="address"><br>
        		
        		<label for = "phone-home">Home Phone:</label>
        		<input type="tel" id="phone-home" name="phone-home"><br>
        		    		
        		<label for = "phone-cell">Cell Phone:</label>
        		<input type="tel" id="phone-cell" name="phone-home"><br>
        		
        		Is this partisipant a Minor?<br>
        		<label for = "minor-yes">Yes:</label>
        		<input type="radio" id="minor-yes" name="is-minor" value = "yes">
        		<label for = "minor-no">No:</label>
        		<input type="radio" id="minor-no" name="is-minor" value = "no"><br>
        		
    		</div>
    		
			<input type="reset">
        	<input type="submit" onClick="notSubmitted()">
    		
    	</form>
    	<?php
        echo $footer;
        ?>
    </body>
    
</html>

