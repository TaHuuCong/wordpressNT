<?php

	$errors = array();
	$isError = false;
	$emailPattern = '^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$^';
	$errorRequiredName = __( 'Name is required' );
	$errorRequiredEmail = __( 'Email is required' );
	$errorEmailPatern = __( 'Email format should be cong@deptrai.com' );
	$errorRequiredMessage = __( 'Please write something for us' );
	$errorMinLengthMessage = __( 'Message must be minimum 2 characters' );

	// Validate when submit form
	if ( isset( $_POST['is-submitted'] ) ) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		// Validate name
		if ( empty( $name ) ) {
			$isError = true;
			$errors['errorRequiredName'] = $errorRequiredName;
		}

		// Validate email
		if ( empty( $email ) ) {
			$isError = true;
			$errors['errorRequiredEmail'] = $errorRequiredEmail;
		} else {
			if ( ! preg_match($emailPattern , $email) ) {
				$isError = true;
				$errors['errorEmailPatern'] = $errorEmailPatern;
			}
		}

		// Validate message
		if ( empty( $message ) ) {
			$isError = true;
			$errors['errorRequiredMessage'] = $errorRequiredMessage;
		} else {
			if ( ! alpha_validate_length( $message, 2 ) ) {
				$isError = true;
				$errors['errorMinLengthMessage'] = $errorMinLengthMessage;
			}
		}

	}

?>

<div class="contact-info" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="ci-text">
					<h1 class="ci-text-h1">Contact Info:</h1>
					<p class="ci-text-p">
						Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae
						sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.
					</p>
					<ul class="ci-text-ul">
						<li>
							<strong>Address:</strong> 10111 Santa Monica Boulevard, LA
						</li>
						<li>
							<strong>Phone:</strong> +44 987 065 908
						</li>
						<li>
							<strong>Email:</strong> info@Example.com
						</li>
						<li>
							<strong>Fax:</strong> +44 987 065 909
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="row contact-notify">
				<?php if (isset($isError) && $isError) : ?>
					<div class="alert alert-danger">
						<?php _e('Sorry, it seems there was an error.'); ?>
					</div>
				<?php else : ?>
					<?php if (isset( $_POST['is-submitted'] )) : ?>
						<div class="alert alert-success">
							<?php _e('Your message has been sucessfully sent, thank you!'); ?>
						</div>
					<?php endif; ?>	
            	<?php endif; ?>
				</div>
				<div class="row contact-form">
					<form action="<?php  ?>" class="ci-form" method="post">
						<div class="form-group row">
							<div class="col-md-6 ci-form-name">
								<input type="text" class="form-control ci-form-control" name="name" placeholder="<?php _e('Enter your name')?>">

								<?php if ( isset( $errors['errorRequiredName'] ) ) : ?>
								<div class="notify-error">
									<?php echo $errors['errorRequiredName']; ?>
								</div>
								<?php endif; ?>
							</div>
							<div class="col-md-6 ci-form-email">
								<input type="text" class="form-control ci-form-control" name="email" placeholder="<?php _e('Enter your email')?>">

								<?php if ( isset( $errors['errorRequiredEmail'] ) ) : ?>
								<div class="notify-error">
									<?php echo $errors['errorRequiredEmail']; ?>
								</div>
								<?php endif; ?>

								<?php if ( isset( $errors['errorEmailPatern'] ) ) : ?>
								<div class="notify-error">
									<?php echo $errors['errorEmailPatern']; ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="ci-h-30"></div>
						<div class="form-group row">
							<input type="text" class="form-control ci-form-control ci-form-title" name="title" placeholder="<?php _e('Enter message title')?>">
						</div>
						<div class="ci-h-30"></div>
						<div class="form-group row">
							<textarea class="form-control ci-form-control" rows="8" name="message" placeholder="<?php _e('Enter message')?>"
							 aria-required="true"></textarea>

							<?php if ( isset( $errors['errorRequiredMessage'] ) ) : ?>
							<div class="notify-error">
								<?php echo $errors['errorRequiredMessage']; ?>
							</div>
							<?php endif; ?>

							<?php if ( isset( $errors['errorMinLengthMessage'] ) ) : ?>
							<div class="notify-error">
								<?php echo $errors['errorMinLengthMessage']; ?>
							</div>
							<?php endif; ?>
						</div>
						<div class="ci-h-30"></div>
						<input type="hidden" name="is-submitted" id="is-submitted" value="true">
						<div class="form-group row">
							<button type="submit" class="ci-form-btn">
								<?php _e( 'Send Message' ); ?>
							</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>