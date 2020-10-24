<?php 
$commonHead = 
    "<meta name=\"viewport\" content=\"initial-scale=1.0; width=device-width\">
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\"  href=\"css/common.css\">
    <link rel=\"stylesheet\"  href=\"css/" . $pageName . ".css\">
    <title>Archery Camp - " . $pageName . "</title>
    ";

echo $commonHead;

$navBar = "
<ul class=\"navBar\">
	<li><a href=\"index.php\">Home</a></li>
	<li><a href=\"signup.php\">Signup</a></li>
    <li><a href=\"activities.php\">Activities</a></li>
    <li><a href=\"parents.php\">Info For The Parents</a></li>
    <li><a href=\"our_leaders.php\">Meet Our Leaders</a></li>
	
    <li><a href=\"thankYou.php\">Thank You All</a></li>
	<li><a href=\"our_beliefs.php\">Our Beliefs</a></li>
	<li><a href=\"gallery.php\">Gallery</a></li>
	
	<li><a href=\"news.php\">News</a></li>
	<li><a href=\"staff/staff.php\">Staff Login</a></li>
</ul>
<div style=\"width:100%;color:red;background:orange;\">Site is under construction. Information listed here is not guaranteed to be accurate!</div>
";

$footer = " <footer>
		<div>
			<h3>Contact Us:</h3>
			<ul>
				<li>Facebook</li>
				<li>archerycamp@gmail.com</li>
			</ul>
		</div>
		<div>
			<h3>Our associates</h3>
			<ul>
				<li>Lutheran Pioneers</li>
				<li>WELS Lutheran Synod</li>
			</ul>
		</div>
		
	</footer>";
?>