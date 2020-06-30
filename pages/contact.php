<div class="page">
	<h1>Contact</h1>
	<?php
	if(isset($_GET['thankyou'])){
	?>
	<h4>Thank you for contacting Dynasty 11.</h4>
	<p>Your contact form has been submitted. We'll get back to you as soon as possible.</p>
	<?php
	}
	if(isset($_GET['error'])){
	?>
	<h4>An error occured</h4>
	<?php
	}
	?>
	<form class="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div>
			<label for="name">Name: <span class="red">*</span></label>
			<input type="text" name="name" placeholder="John Doe">
			<label for="mail">Email: <span class="red">*</span></label>
			<input type="text" name="mail" placeholder="example@gmail.com">
			<label for="subject">Subject: <span class="red">*</span></label>
			<input type="text" name="subject" placeholder="Enter your subject">
			<label for="comment">Comment: <span class="red">*</span></label>
			<textarea name="message" placeholder="Enter your comment"></textarea>
			<input type="submit" name="submit" class="bigButton" value="Submit" />
		</div>
	</form>
</div>