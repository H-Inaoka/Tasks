<?php
/**
 * View/Elements/TaskBlockRolePermissions/edit_formテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirotsugu Inaoka <inaoka.hirotsugu@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * View/Elements/TaskBlockRolePermissions/edit_formテスト用Controller
 *
 * @author Hirotsugu Inaoka <inaoka.hirotsugu@withone.co.jp>
 * @package NetCommons\Tasks\Test\test_app\Plugin\TestTasks\Controller
 */
class TestViewElementsTaskBlockRolePermissionsEditFormController extends AppController {

/**
 * edit_form
 *
 * @return void
 */
	public function edit_form() {
		$this->autoRender = true;
	}

}