<?php
/*
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<main class="page margin-top">
	<div class="page__form">
		<div class="page__content">
			<h2 aria-level="1" class="page__content__title cyberpunk"> Contact Me </h2>
			<p class="page__content__advice">If you want to work with me, you’ll need to complete this form.</p>
			<p class="page__content__advice">Labels with a * are required, don’t forget them.</p>
		</div>

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
			<fieldset class="contact__info">
				<div class="contact__container">
					<div class="field-fname">
						<label for="firstname" class="field__label">First Name (*)</label>
						<input type="text" name="firstname" id="firstname" class="field__input field__input"/>
                        <?php if ($errors['firstname'] ?? null): ?>
							<p class="field__error"><?= $errors['firstname']; ?></p>
                        <?php endif; ?>
					</div>
					<div class="field-lname">
						<label for="lastname" class="field__label">Last Name (*)</label>
						<input type="text" name="lastname" id="lastname" class="field__input field__input"/>
                        <?php if ($errors['lastname'] ?? null): ?>
							<p class="field__error"><?= $errors['lastname']; ?></p>
                        <?php endif; ?>
					</div>

					<div class="field-email">
						<label for="email" class="field__label">Email (*)</label>
						<input type="email" name="email" id="email" class="field__input"/>
                        <?php if ($errors['email'] ?? null): ?>
							<p class="field__error"><?= $errors['email']; ?></p>
                        <?php endif; ?>
					</div>
					<div class="field-txtarea">
						<label for="message" class="field__label">Your Message</label>
						<textarea name="message" id="message" cols="30" rows="10" class="field__textarea"></textarea>
                        <?php if ($errors['message'] ?? null): ?>
							<p class="field__error"><?= $errors['message'] ?></p>
                        <?php endif; ?>
					</div>
				</div>
				<div class="contact__footer">
					<input type="hidden" name="action" value="portfolio_contact_form"/>
					<input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('portfolio_contact_form') ?>"/>
					<button class="contact__footer__submit" type="submit">Submit</button>
				</div>
			</fieldset>
		</form>

        <?php get_template_part('includes/section', 'informations') ?>
</main>
<?php get_footer(); ?>

