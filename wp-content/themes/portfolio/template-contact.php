<?php
/*
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<div class="page-form flex flex-col">
	<h2 aria-level="1" class="page-form-title font-title title"> Contact</h2>
    <?php
    $feedback = portfolio_session_get('portfolio_contact_form_feedback') ?? false;
    $errors = portfolio_session_get('portfolio_contact_form_errors') ?? [];
    ?>
    <?php if ($feedback): ?>
		<div class="success">
			<p>Thank you ! Message received.</p>
		</div>
    <?php endif; ?>

    <?php if ($errors): ?>
		<div class="error">
			<p>Please be careful and correct what is wrong.</p>
		</div>
    <?php endif; ?>
	<form action="<?= esc_url(admin_url('admin-post.php')) ?>" method="POST" class="contact">
		<fieldset class="contact-info flex flex-col">
			<div class="contact-container flex flex-col">
				<div class="contact-container-input flex flex-col">
					<div class="field-fname flex flex-col">
						<label for="firstname" class="field-label">First Name (*)</label>
						<input type="text" name="firstname" id="firstname" class="field-input"/>
                        <?php if ($errors['firstname'] ?? null): ?>
							<p class="error"><?= $errors['firstname']; ?></p>
                        <?php endif; ?>
					</div>
					<div class="field-lname flex flex-col">
						<label for="lastname" class="field-label">Last Name (*)</label>
						<input type="text" name="lastname" id="lastname" class="field-input"/>
                        <?php if ($errors['lastname'] ?? null): ?>
							<p class="error"><?= $errors['lastname']; ?></p>
                        <?php endif; ?>
					</div>

					<div class="field-email flex flex-col">
						<label for="email" class="field-label">Email (*)</label>
						<input type="email" name="email" id="email" class="field-input"/>
                        <?php if ($errors['email'] ?? null): ?>
							<p class="error"><?= $errors['email']; ?></p>
                        <?php endif; ?>
					</div>
				</div>
				<div class="field-txtarea flex flex-col">
					<label for="message" class="field-label">Your Message</label>
					<textarea name="message" id="message" cols="30" rows="5" class="field-input
					field-txtarea"></textarea>
                    <?php if ($errors['message'] ?? null): ?>
						<p class="error"><?= $errors['message'] ?></p>
                    <?php endif; ?>
				</div>
			</div>
			<div class="contact-footer flex aligncenter justify-center">
				<input type="hidden" name="action" value="portfolio_contact_form"/>
				<input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('portfolio_contact_form') ?>"/>
				<button class="contact-footer-submit" type="submit">Submit</button>
			</div>
		</fieldset>
	</form>

    <?php get_footer(); ?>

