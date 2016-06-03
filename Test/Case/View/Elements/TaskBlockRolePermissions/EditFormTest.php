<?php
/**
 * View/Elements/TaskBlockRolePermissions/edit_formのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirotsugu Inaoka <inaoka.hirotsugu@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * View/Elements/TaskBlockRolePermissions/edit_formのテスト
 *
 * @author Hirotsugu Inaoka <inaoka.hirotsugu@withone.co.jp>
 * @package NetCommons\Tasks\Test\Case\View\Elements\TaskBlockRolePermissions\EditForm
 */
class TasksViewElementsTaskBlockRolePermissionsEditFormTest extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array();

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'tasks';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//テストプラグインのロード
		NetCommonsCakeTestCase::loadTestPlugin($this, 'Tasks', 'TestTasks');
		//テストコントローラ生成
		$this->generateNc('TestTasks.TestViewElementsTaskBlockRolePermissionsEditForm');
	}

/**
 * View/Elements/TaskBlockRolePermissions/edit_formのテスト
 *
 * @return void
 */
	public function testEditForm() {
		//テスト実行
		$this->_testGetAction('/test_tasks/test_view_elements_task_block_role_permissions_edit_form/edit_form',
				array('method' => 'assertNotEmpty'), null, 'view');

		//チェック
		$pattern = '/' . preg_quote('View/Elements/TaskBlockRolePermissions/edit_form', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//TODO:必要に応じてassert追加する
		debug($this->view);
	}

}
