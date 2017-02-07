<!DOCTYPE html>
<html>
<head>
<title>Assignment One</title>
<link rel="stylesheet" type="text/css" href="a1.css">
<link href="https://fonts.googleapis.com/css?family=Boogaloo|Poiret+One" rel="stylesheet">
</head>
<body>
	<h1>Apryl Bradford</h1>
	<div>
		<img class="img" src="/images/newYork.jpg" alt="Me in New York">
	</div>
	<div>
		<h2>About Me</h2>
		<p class="about">Welcome! I am a teacher on a journey to become a front end web developer. I am a degree candidate for a Masters degree in Digital Media and Design at Harvard Extension School. I am married to my best friend. I have an 11-year-old son, a baby on the way, and a beagle. I live in the Valley of the Sun aka Phoenix, AZ.</p>
	</div>

	<div class="quote">
		<h2>Favorite Quotes</h2>
		<?php 
			$quotes = [
			'"Come what may, and love it. -Joseph B. Wirthlin"', 
			'"Dream beautiful dreams and then work to make those dreams come true. -Spencer W. Kimball"', 
			'"She believed she could, so she did. -R.S. Grey, Scoring Wilder"'
			];
		
			echo $quotes[array_rand($quotes)];   
			?>		
	</div>
</body>
</html>