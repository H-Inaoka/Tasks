<?php
/**
 * CategoryHelper::beforeRender()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * CategoryHelper::beforeRender()のテスト
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\Case\Controller\Component\CategoryHelper
 */
class CategoryHelperBeforeRenderTest extends NetCommonsControllerTestCase {

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
	}

/**
 * beforeRender()のテスト
 *
 * @return void
 */
	public function testBeforeRender() {
		//テストコントローラ生成
		$this->generateNc('TestTasks.TestCategoryHelperBeforeRender');

		//テスト実行
		$this->_testGetAction('/test_tasks/test_category_helper_before_render/index',
				array('method' => 'assertNotEmpty'), null, 'view');

		//チェック
		$pattern = '/' . preg_quote('View/Helper/TestCategoryHelperBeforeRender', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//cssのURLチェック
		//TODO:不要だったら削除する
		$pattern = '/<link.*?' . preg_quote('/tasks/css/style.css', '/') . '.*?>/';
		//$this->assertRegExp($pattern, $this->contents);

		//scriptのURLチェック
		//TODO:不要だったら削除する
		$pattern = '/<script.*?' . preg_quote('/tasks/js/tasks.js', '/') . '.*?>/';
		//$this->assertRegExp($pattern, $this->contents);

		//TODO:必要に応じてassert追加する
		debug($this->view);

	}

}
