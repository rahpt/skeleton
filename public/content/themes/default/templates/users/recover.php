<div class="row">
	<div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
		<h1 class="text-center"><?= __('us_recover_title') ?></h1>
		<div class="panel panel-default">
			<div class="panel-body">
				<p class="text-muted"><?= __('us_recover_notice') ?></p><br />
				<?= form_open('login/recover', 'role="form" autocomplete="off"', @$hidden) ?>
					<div class="form-group<?= form_error('identity') ? ' has-error' : '' ?>">
						<label for="identity" class="sr-only"><?= __('identity') ?></label>
						<?= print_input($identity, array('class' => 'form-control', 'autofocus' => 'autofocus')) ?>
						<?= form_error('identity', '<small class="help-block">', '</small>') ?>
					</div>
				<?php if (get_option('use_captcha', false) === true): ?>
					<div class="form-group<?= form_error('captcha') ? ' has-error' : '' ?>">
					<?php if (get_option('use_recaptcha', false) === true): ?>
							<?= $captcha ?>
					<?php else: ?>
						<div class="row">
							<div class="col-xs-12 col-sm-6"><?= $captcha_image ?></div>
							<div class="col-xs-12 col-sm-6"><?= print_input($captcha, array('class' => 'form-control')) ?></div>
						</div>
					<?php endif; ?>
						<?= form_error('captcha', '<small class="help-block">', '</small>') ?>
					</div>
				<?php endif; ?>
					<button type="submit" class="btn btn-primary btn-block"><?= __('send_link') ?></button>
				<?= form_close() ?>
			</div>
			<div class="panel-footer">
					<?= anchor('login', __('login'), 'class="btn btn-default"') ?>
				<?php if (get_option('allow_registration', false) === true): ?>
					<?= anchor('register', __('create_account'), 'class="btn btn-default pull-right"') ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
