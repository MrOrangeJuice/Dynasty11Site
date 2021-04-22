<div class="page">

	<div>
		<h1>Who are we?</h1>
		<p>Founded in 2016, Dynasty 11 Studios is a video game development company located in the Philadelphia area, PA.
		Our company was created to be an industry-disrupting, forward-thinking organization with numerous advancements in product design, business development and sustainability, and studio operation.
		To ensure a highly profitable and self-sustaining future, our studio is being developed as an accumulation of highly successful corporate strategies from across the business and entertainment landscape, ensuring a highly profitable and self-sustaining future.</p>

		<p>We are currently building our team! If you are an enthusiastic, ambitious, uniquely talented, and collaborative-minded individual, please see the <a href="#contactHeader" class="contact">Contact</a> form to inquire about joining Dynasty 11 Studios!</p>
	</div>
	
	<h1>Our Team</h1>
	<div class="aboutGallery">
		<div class="galleryItem">
			<img src="media/playerCards/colin.png" alt="Colin" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/juliana.png" alt="Juliana" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/elizabeth.png" alt="Elizabeth" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/brian.png" alt="Brian" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/dylan.png" alt="Dylan" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/alex.png" alt="Alex" class="galleryImg">
		</div>
		<div class="galleryItem">
			<img src="media/playerCards/reagan.png" alt="Reagan" class="galleryImg">
		</div>
	</div>

	<!--
	<h1 id="contributors">Contributors</h1>
	<div class="aboutGallery">
		<div class="galleryItem">
			<img src="media/portraits/VeronicaC.jpg" alt="Veronica" class="galleryImg">
			<h3>Veronica Restrepo</h3>
			<p>Social Media</p>
			<p>“Be the CEO your parents wanted you to marry”</p>
		</div>
	</div>
	-->
	<h1>Our Partners</h1>
	<a href="https://www.jumpbuttonstudio.com/"><img src="media/jumpbutton.png" class="productBanner" id="jumpbutton"></a>

	<br>
	<br>
	<br>
	<br>
	<hr>
	<br>
	<div>
		<h1>Dynasty 11 Studios is Hiring!</h1>
		<p>We are seeking uniquely talented and collaborative professionals to join our Player 2 team in the positions
			listed below! To apply, please submit your resume to contact@dynasty11.com.</p>
		<br>
		<div class="joblisting">
		<h2>Full Stack Developer</h2>
		<p>We are looking to bring on a full stack developer with fluency in PHP and React,
			some experience with gaming platform integration (Xbox/PlayStation/Steam/Discord SDK/API familiarity), and
			knowledge of server management for a multi-faceted social platform. This position is in a remote working
			capacity and can be compatible with another job. This position also presents an excellent opportunity for
			leadership and career building, as Dynasty 11 Studios is a young company in search of uniquely talented
			professionals to join and grow with our team/business.</p>
		</div>
		
		<div class="joblisting">
		<h2>Finance</h2>
		<p>We are seeking a finance professional to join our team with a knowledge of app-related revenue streams (ads,
			subscriptions, data usage). Responsibilities include financial data tracking and forecasting, contributing
			to company financial strategy, budgeting, managing payroll and tax filing, and assisting with legal/IP
			compliance. This position is in a remote working capacity and can be compatible with another job. This
			position also presents an excellent opportunity for leadership and career building, as Dynasty 11 Studios is
			a young company in search of uniquely talented professionals to join and grow with our progressive and
			diverse team.</p>
		</div>
	</div>

	<br>
	<br>
	<hr>
	<br>

	<h1 id="contactHeader">Contact</h1>
	<?php
	if(isset($_GET['thankyou'])){
	?>
	<h3>Thank you for contacting Dynasty 11.</h3>
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
	<br>
</div>