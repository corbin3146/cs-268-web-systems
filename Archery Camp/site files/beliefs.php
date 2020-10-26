<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<?php
    	$pageName = "Our Beliefs";
    	$cssFile = "beliefs";
    	include "common_elements.php";
    	?>
    </head>
    
    <body>
    	
    	<header>
    		<h1>Our Beliefs</h1>
    	</header>
    	
    	<?php
    		echo $navBar;
    	?>
    	
    	<h2>This we believe:</h2>
    		<p>"Whoever acknowledges me before men, I will also acknowledge him before my Father in heaven" (Matthew 10:32). 
    		With these words Jesus indicates that he wants Christians to confess publicly what they believe in their hearts.</p>
    		<p>We believe that the Bible is the written word of God, and that it is fully inspired by God and without error. </p>
    	<h2>APOSTLES' CREED</h2>
    	<p>Christians use the Apostles' Creed to tell others what we believe and also to confess our faith with one another.</p>
    	
    	<div class = "creed-portion">
    		<img src="images/god_father.JPG" alt="image of hand representing God the Father">
    		<p>I believe in God, the Father almighty, maker of heaven and earth.</p>
    	</div>
    	
    	<div class = "creed-portion">
    	<img src="images/god_son.JPG" alt="image of lamb representing God the Son">
    	<p>I believe in Jesus Christ, his only Son, our Lord, who was conceived by the Holy Spirit, born of the virgin Mary, 
    	suffered under Pontius Pilate, was crucified, died, and was buried. He descended into hell. The third day he rose 
    	again from the dead. He ascended into heaven and is seated at the right hand of God the Father almighty. From there 
    	he will come to judge the living and the dead.</p>
    	</div>
    	
    	<div class = "creed-portion">
    	<img src="images/god_spirit.JPG" alt="image of dove representing God the Holy Spirit">
    	<p>I believe in the Holy Spirit, the holy Christian Church, the communion of saints, the forgiveness of sins, the 
    	resurrection of the body, and the life everlasting.</p>
    	</div>
    	<p id="amen">Amen.</p>
    	<?php
        echo $footer;
        ?>
    </body>
</html>