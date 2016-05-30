<?php
/*
 * TaskMailSettings Controller
 *
 * プラグイン「回覧板」を参考、参考ファイル：CircularNoticeMailSettingsController.php
 */

App::uses('MailSettingsController', 'Mails.Controller');

class TaskMailSettingsController extends MailSettingsController {

/**
 * use helpers
 *
 * @var array
 */
	public $helpers = array(
		'Blocks.BlockRolePermissionForm',
		'Blocks.BlockTabs' => array(
			'mainTabs' => array('role_permissions', 'mail_settings')
		),
		'Mails.MailForm',
	);

}