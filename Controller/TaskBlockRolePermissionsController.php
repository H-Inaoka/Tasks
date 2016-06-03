<?php
/**
 * TaskBlockRolePermissions Controller
 */

App::uses('TasksAppController', 'Tasks.Controller');

class TaskBlockRolePermissionsController extends TasksAppController {


/**
 * layout
 *
 * @var array
 */
	public $layout = 'NetCommons.setting';

/**
 * use models
 *
 * @var array
 */
	public $uses = array(
		'Blocks.Block',
	);

/**
 * use components
 *
 * @var array
 */
	public $components = array(
		'NetCommons.Permission' => array(
			//アクセスの権限
			'allow' => array(
				'edit' => 'block_permission_editable',
			),
		),
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

		$permissions = $this->Workflow->getBlockRolePermissions(
			array(
				'content_creatable',
				'content_publishable',
				'content_comment_creatable',
				'content_comment_publishable',
				'content_category_creatable',
				'content_category_publishable',
			)
		);
		$this->set('roles', $permissions['Roles']);

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['TaskRolePermission'] = Hash::merge(
				$permissions['BlockRolePermissions'],
				$this->request->data['BlockRolePermission']
			);
		} else {
			$this->request->data['BlockRolePermission'] = $permissions['BlockRolePermissions'];
			$this->request->data['Frame'] = Current::read('Frame');
		}

	}
}
