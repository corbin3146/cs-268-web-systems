<!DOCTYPE html>
<html>
    <head>
    	<?php
    	$pageName = "Our Leaders";
    	$cssFile= "leaders";
        include "common_elements.php";
    	?>
    </head>
    
    <body>
    	<header>
    		<h1>Meet Our Leaders</h1>
    	</header>
    	
    	<?php
    		echo $navBar;
    	?>
    	<!-- Card Template                                                                             -->
    	<div class = "card">
			<div class="card-top">
			<img src="images/headshots/matthew_grieling.jpg" alt="Filler image of gold leaf">
			<h4>Name: Card Template</h4>
			<h4>Position: Staff</h4>
			<h4>Home Town: Home</h4>
			</div>
			<div class="card-stats">
				<ul>
					<li>4</li>
					<li>bullet points</li>
					<li>about you</li>
					<li>or what you do</li>
				</ul>
			</div>
			<div class = "card-content">
    			<p>
    				130-150 word bio on who you are and what you do at camp<br>
    				---<br>
    				your favorite motto, saying, proverb etc. 
    			</p>
			</div>
    	</div>
    	
    	<!-- Corbin LaFleur                                                                            -->
    	<div class = "gold card">
			<div class="card-top">
			<img src="images/headshots/corbin_lafleur.JPG" alt="Corbin LaFleur Headshot">
			<h4>Name: Corbin LaFLeur</h4>
			<h4>Position: Teck Guy</h4>
			<h4>Home Town: Janesville, WI</h4>
			</div>
			<div class="card-stats">
				<ul>
					<li>Student at UWEC</li>
					<li>Board Member</li>
					<li>Software Engineer</li>
					<li>The Teck Guy</li>
				</ul>
			</div>
			
			<div class = "card-content">
    			<p>
    				Hey, I'm Corbin. I am currently studying Software Engineering at UWEC, so I'm the tech guy at camp. I was elected to the board last camp (2019), 
    				and am having a great time building this site. I've been coming to camp since I was old enough to go to camp. At camp, I typically run the 
    				BB-gun range with my uncle, David LaFleur.<br>
    				---<br>
    				Written 10/8/2020
    			</p>
			</div>
		</div>
		
		<!-- Matthew Grieling                                                                         -->
		<div class = "gold card">
			<div class="card-top">
			<img src="images/headshots/matthew_grieling.jpg" alt="Matthew Grieling Headshot">
			<h4>Name: Matthew Grieling</h4>
			<h4>Position: Camp President</h4>
			<h4>Home Town: Madison, WI</h4>
			</div>
			<div class="card-stats">
				<ul>
					<li>Camp President</li>
					<li>Chief</li>
					<li>Face of Camp</li>
					<li>Halarious</li>
				</ul>
			</div>
			<div class = "card-content">
    			<p>
    				MMMM Pie<br>
    				---<br>
    				I have some anouncements
    			</p>
			</div>
		</div>
		
		<!-- Jason LaFleur                                                                            -->
		<div class = "gold card">
			<div class="card-top">
			<img src="images/headshots/jason_lafleur.JPG" alt="Jason LaFleur Headshot">
			<h4>Name: Jason LaFLeur</h4>
			<h4>Position: Camp VP</h4>
			<h4>Home Town: Janesville, WI</h4>
			</div>
			<div class="card-stats">
				<ul>
					<li>Vice President</li>
					<li>Nurse</li>
					<li>Advanced Archery</li>
					<li>Chief Medical Officer</li>
				</ul>
			</div>
			<div class = "card-content">
    			<p>
    				Hi, I'm Jason, the camp Vice president, chief medical officer, and advanced archery instructor.  I've been coming to camp and helping run it for
    				 many years.  I am an avid outdoorsman and have been since a very young age.  I am also a two time silver medalist in Badger State Games field 
    				 archery and share that knowledge with the kids.  I am a nurse in orthopaedic surgery which comes in handy as the chief medical officer. I have 
    				 one son who is our web designer who I could not be more proud of.  I love coming to camp every year and teaching the kids archery and outdoor 
    				 skills.  There is nothing like seeing all the smiles, hearring all the laughter and it is amazing to see friendships that form at camp.<br>
    				---<br>
    				Don't fret the storm, learn to dance in the rain.
    			</p>
			</div>
		</div>
		
		<!-- Dave LaFleur                                                                             -->
    	<div class = "gold card">
			<div class="card-top">
			<img src="images/headshots/dave_lafleur.jpeg" alt="David LaFleur Headshot">
			<h4>Name: Dave LaFLeur</h4>
			<h4>Position: BB-guns Rangemaster</h4>
			<h4>Home Town: Milton, WI</h4>
			</div>
			<div class="card-stats">
				<ul>
					<li>BB-gun Rangemaster</li>
					<li>Board Member</li>
					<li>Avid Outdoorsman</li>
					<li>Hunter</li>
				</ul>
			</div>
			<div class = "card-content">
    			<p>
    				 Hello everyone, my name is Dave LaFleur. I am a father of 3 grown children. I have been with archery camp for 
    				 4-5 years(2020). For 4+ years I have been the range master for BB guns. Each year I change up the targets, doing my best to 
    				 make things fun and interesting for the kids as well as some parents. Mostly we have daisy red rider BB guns for th children. For the parents, 
    				 I sometimes bring my personal break action pellet rifles. I am an avid sportsman. I love hunting with both firearm and bow. I do a 
    				 fair amount of fishing and share my boutny with family and friends. Along with volunteering my time with the archery camp I also am a volunteer 
    				 guide for the Horicon Marsh Vets hunt.<br>
    				 ---<br>
    				 Treat other as you wish to be treated
    			</p>
			</div>
    	</div>
    	
    	<?php
        echo $footer;
        ?>
    </body>
</html>