<?php
/*
 * メール設定 template
 *
 * プラグイン「回覧板」を参考、参考ファイル：CircularNoticeMailSettings/edit.ctp
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
