<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<?php
    	$pageName = "Gallery";
    	$cssFile = "gallery";
        include "common_elements.php";
    	?>
    </head>
    
    <body>
    	<header>
    		<h1>Gallery</h1>
    	</header>
    	<?php
    		echo $navBar;
    	?>
    	
    	<div class = image-section>
        	<h2>Our camp</h2>
        	<img src="images/camp_1.JPG" alt="Chalkboard welcoming people to camp">
        	<img src="images/camp_2.JPG" alt="Savety presentation at beginning of camp">
        	<img src="images/camp_3.JPG" alt="Campers gathering outside, before activities">
    	</div>
    	<div class = image-section>
        	<h2>Archery Ranges</h2>
        	<img src="images/archery_1.JPG" alt="Archery range close perspective">
        	<img src="images/archery_2.JPG" alt="Archerry range wide perspective">
        	<img src="images/archery_3.JPG" alt="Advanmced archery range in woods">
    	</div>
    	<div class = image-section>
        	<h2>BB-gun, Slingshots</h2>
        	<img src="images/bb_1.JPG" alt="Firing line at bb-gun range">
        	<img src="images/bb_2.JPG" alt="Firing line at sling shot range">
        	<img src="images/bb_3.JPG" alt="Firing line at sling shot ramge">
    	</div>
    	<div class = image-section>
    		<h2>Fire building</h2>
        	<img src="images/fire_1.JPG" alt="girl using magnifying glass at fire building station">
        	<img src="images/fire_2.JPG" alt="girl using magnisium bar and striker at fire building station">
        	<img src="images/fire_3.JPG" alt="smoke from successful fires at fire building station">
    	</div>
    	<div class = image-section>
    		<h2>Super Secret</h2>
    		<img src="intentionaly_bad_link.JPG" alt="Nice Try, its a stecet ;)">
    	</div>
    	<?php
        echo $footer;
        ?>
    </body>
</html>