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

<!--	ToDo: メール設定画面を３つ表示しているが、内２つ（2,3つ目）に Notice が表示される、表示文章未着手 -->
		<?php echo $this->MailForm->editFrom(
			array(
				array(
					'mailBodyPopoverMessage' => __d('tasks', 'MailSetting.mail_fixed_phrase_body.popover'),
					'useNoticeAuthority' => 0,
				),
////				↓ここと	// ToDo: 一時保留
//				array(
//					'mailBodyPopoverMessage' => __d('tasks', 'MailSetting.mail_fixed_phrase_body.popover'),
//					'useNoticeAuthority' => 0,
//				),
////				↓ここ。	// ToDo: 一時保留
//				array(
//					'mailBodyPopoverMessage' => __d('tasks', 'MailSetting.mail_fixed_phrase_body.popover'),
//					'useNoticeAuthority' => 0,
//				),
			
			),
			NetCommonsUrl::backToIndexUrl('default_setting_action'),
			0
		); ?>

	</div>

</div>
