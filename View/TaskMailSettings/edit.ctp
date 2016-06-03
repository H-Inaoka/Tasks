<?php
/**
 * メール設定 template
 */
?>

<div class="block-setting-body">

	<div class="tab-content">

		<?php echo $this->BlockTabs->main(BlockTabsHelper::MAIN_TAB_MAIL_SETTING); ?>

		<?php /** @see MailFormHelper::editFrom() */ ?>

		<?php echo $this->MailForm->editFrom(
			array(
				array(
					'mailBodyPopoverMessage' => __d('tasks', 'MailSetting.mail_fixed_phrase_body.popover'),
					'useNoticeAuthority' => 0,
				),
			),
			NetCommonsUrl::backToPageUrl('default_setting_action'),
			0
		); ?>

	</div>

</div>
