<?php
/**
 * TaskBlockRolePermissions Controller
 *
 * プラグイン「回覧板」を参考、参考ファイル：CircularNoticeBlockRolePermissionsController.php
 *
 * ToDo: 現状 … 右側のメニューおよび上部の編集終了ボタンなどが表示されない、Notice表示により権限設定等が表示されない、メール設定への遷移は可能
 */

App::uses('TasksAppController', 'Tasks.Controller');

class TaskBlockRolePermissionsController extends TasksAppController {


/**
 * layout
 *
 * @var array
 */
	public $layout = 'NetCommons.setting';	// ToDo 要設定（単純にコメントアウトするとエラー「Missing Layout」が表示される

/**
 * use models
 *
 * @var array
 */
	public $uses = array(

	);

/**
 * use components
 *
 * @var array
 */
	public $components = array(
		
	);

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
	);

/**
 * edit action
 *
 * @return void
 */
	public function edit() {

	}
}
