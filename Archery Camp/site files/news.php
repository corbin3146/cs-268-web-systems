<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<?php
    	$pageName = "News";
    	$cssFile = "news";
        include "common_elements.php";
    	?>
    	
    </head>
    
    <body>
    	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="BHV9fl2L"></script>
    	
    	<h1>News Page</h1>
    	
    	<?php
    		echo $navBar;
    	?>
    	<div class="fb-page" data-href="https://www.facebook.com/archerycamp.org/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
    	<div id="News-feed">
    		
        	
        	<h2>Looking forward:</h2>
        	<p>looking forward to camp next year, 2021. Having meetings, making plans, looking into some new equipment, possible new activities. MWRAC plans to come 
        		back strong as soon as it is safe to</p>
        	<h4>Future Items to Obtain(wishlist):</h4>
        		<ul id="wishlist">
        			<li>Velociraptor Dinosaur 3D archery Target</li>
        			<li>Genesys Youth Bows</li>
        			<li>3D foam targets (Deer, Bear, Turkey, other)</li>
        			<li>New arrows (carbon, youth) 3-4 Dozen</li>
        		</ul>
      	 	<h2 style="float:none;">2020 - camp cancelation</h2>
        	<p>To Whom it may Concern,<br>
               		I regret to inform you the 2020 Midwest Regional Archery Camp has been cancelled. We have reviewed current 
               		health and Safely recommendations for the Covid-19 on a city, county, state, and national level. The 
               		facilities we use are closed. It is our determination that cancelling this year's Camp is in the best 
               		interest and safety of our staff and attendees. If you have any questions, please email. We look forward to 
               		seeing each and every one of you next year. 
               		</p>
        	
        	<h2>2019 - New equipment</h2>
        		<p>2 new Genesis bows. Genesis bows are the ideal bows for children, due to the lower poundage capabilities and the variable draw lengths. Camp only has a 
        		few of these bows, borrows several more from other camps. Our plan is to fully equip camp with these bows as our minimal budget allows.</p>
        	<h2>2018 - All New carbon arrows to replace the old wooden arrows</h2>
        		<p>Wooden arrows are heavier and less safe. The new carbin arrows will be more durrable, and fly better for the light bow draw weight. 
        		in this age group.</p>
    	</div>
    	
    	<?php
        echo $footer;
        ?>
    </body>
</html>