<section class="banner contact-banner">
	<div class="banner-inner">
		<div class="container-fluid">
			<div id="bannerText" class="col-md-12">
				<h1 class="feature-primary-heading">CONTACT US</h1>
			</div>
		</div>
	</div>
</section>

<section id="contact-us">
	<div class="container-fluid">
		<div class="row center">
			<div class="col-sm-4 contact-details">
				<h3>Need our help ?</h3>
				<p>
					Don’t hestiate to ask us something. Email us directly <a href="mailto:info@hotelieracademy.com">info@hotelieracademy.com</a> or call us at 051 978798.
				</p>
				<p>You can checkout our <a href="contact.html#">FAQ</a> page to get more information about our products.</p>
				<ul class="list-unstyled">
					<li class="ph">
						<i class="fa fa-phone"></i>
						<h4>++ 353 51 788787</h4>
						<span>Our support center</span>
					</li>
					<li class="email">
						<i class="fa fa-envelope"></i>
						<h4 class="contact-email">support@hotelieracademy.com</h4>
						<span>Send us an email directly</span>
					</li>
				</ul>
			</div>
			<div class="col-sm-8">
				<div class="contact-col">
					<h3>Get in touch with us</h3>
					<?php echo $this->Form->create($contact, array('id' => 'contactForm', 'class' => 'form-horizontal contact-form')); ?>
						<div class="form-group">
							<label for="name" class="control-label col-sm-2">Your Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
							</div>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label for="email" class="control-label col-sm-2">Your E-mail</label>
							<div class="col-sm-10">
								<input type="email" name="email" id="email" class="form-control" placeholder="Enter E-mail" required>
							</div>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label for="message" class="control-label col-sm-2">Your Message</label>
							<div class="col-sm-10">
								<textarea type="text" name="message" id="message" class="form-control" placeholder="Start Typing" required></textarea>
							</div>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php 
									echo $this->Form->button('<i class="fa fa-paper-plane"></i> Send Message', 
										array('id' => 'contact-submit', 
											  'escape' => false,
											  'class' => 'btn btn-success'
											  )
										);
									echo $this->Form->end(); ?>
							</div>
						</div>
						<!-- /.form-group -->
					</form>
				</div>
			</div>
		</div>
	</div>
</section>