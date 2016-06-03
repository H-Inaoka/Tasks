<?php
/**
 * View/Elements/dropdown_toggle_categoryテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * View/Elements/dropdown_toggle_categoryテスト用Controller
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\test_app\Plugin\TestTasks\Controller
 */
class TestViewElementsDropdownToggleCategoryController extends AppController {

/**
 * dropdown_toggle_category
 *
 * @return void
 */
	public function dropdown_toggle_category() {
		$this->autoRender = true;
	}

}
