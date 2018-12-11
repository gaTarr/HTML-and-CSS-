<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
	Final Project
	Greg Tarr
	December 8, 2017
  -->
  
<title>The Coffee Tree Cafe</title>

<link href= "stylesheet.css" rel= "stylesheet" type = "text/css" media="screen"/>
<link href= "printstyles.css" rel="stylesheet" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">

<style>

</style>
</head>

<body>
<div id="container">
  	<header>
		<p>
		<a href="index.html"><img src="images/bean-logo.jpg" alt="Home" title="Home" width="72px" height="67px"></a>
		</p>
		<h1><a href="index.html" title="Home">The Coffee Tree Cafe</a></h1>
	</header>
	
	<nav>
		<ul>
			<li><a href = "about.html" title = "About Us" >About</a></li>
			<li><a href = "menu.html" title = "Our Menu" >Our Menu</a></li>
			<li><a href = "events.html" title = "Events" >Events</a></li>
			<li><a href = "contact.html" title = "Contact Us" >Contact</a></li>
		</ul>
	</nav>
	
<div id="background">
  <section id="info">
  <aside>
	<h3>Cafe Message</h3>
	<p>Thank you for reaching out to The Coffee Tree Cafe!</p>
	<p>Someone will respond to your inquiry as soon as possible!</p>
	
	<p></p>
  </aside>

  </section>  <!-- end info -->

  <main> 
<section id="review">



<?php

	echo "<p>You submitted the following information:</p><p><br /></p>";

	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</section>  <!-- end review -->
</main>

<footer>
	<p>604 24th St, St Paul, MN &emsp;|&emsp; 702-971-1154</p>
	<p class="copywright">&copy; Copyright 2017 All Rights Reserved <em><a href="www.gregorytarr.net">www.gregorytarr.net</a></em></p>
</footer> <!-- end footer -->

</div><!--end div background-->
</section> <!-- end container -->
</body>
</html>
