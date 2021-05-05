<?php
/* Template Name: Contact */
get_header();
?>
<div>

<div class="contact-section">
	<h1>CONTACT US</h1>
	<div class="border"></div>
	<form class="contact-form" action="contactus.html" method="post">
		<input type="text" class="contact-form-text" placeholder="Your Name">
		<input type="email" class="contact-form-text" placeholder="Your Email">
		<input type="text" class="contact-form-text" placeholder="Your Phone">
		<textarea class="contact-form-text" placeholder="Your Message"></textarea>
		<input type="submit" class="contact-form-btn" value="Send">
	</form>
	</div>
</div>

<?php get_footer(); ?> 
