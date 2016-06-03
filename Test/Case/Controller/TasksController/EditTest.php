<?php
/**
 * TasksController::edit()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * TasksController::edit()のテスト
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\Case\Controller\TasksController
 */
class TasksControllerEditTest extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.tasks.task',
	);

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'tasks';

/**
 * Controller name
 *
 * @var string
 */
	protected $_controller = 'tasks';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		//ログイン
		TestAuthGeneral::login($this);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		//ログアウト
		TestAuthGeneral::logout($this);

		parent::tearDown();
	}

/**
 * edit()アクションのGetリクエストテスト
 *
 * @return void
 */
	public function testEditGet() {
		//テスト実行
		$this->_testGetAction(array('action' => 'edit'),
				array('method' => 'assertNotEmpty'), null, 'view');

		//チェック
		$this->__assertEditGet();
	}

/**
 * edit()のチェック
 *
 * @return void
 */
	private function __assertEditGet() {
		$this->assertInput('form', null, '/tasks/tasks/edit', $this->view);
		$this->assertInput('input', '_method', 'PUT', $this->view);

		//TODO:必要に応じてassert書く
	}

/**
 * POSTリクエストデータ生成
 *
 * @return array リクエストデータ
 */
	private function __data() {
		$data = array(
			//TODO:必要に応じて、assertを追加する
		);

		return $data;
	}

/**
 * edit()アクションのPOSTリクエストテスト
 *
 * @return void
 */
	public function testEditPost() {
		//テスト実行
		$this->_testPostAction('put', $this->__data(),
				array('action' => 'edit'), null, 'view');

		//チェック
		$header = $this->controller->response->header();
		$pattern = 'task/task/index/' . $blockId;
		$this->assertTextContains($pattern, $header['Location']);
	}

/**
 * ValidationErrorテスト
 *
 * @return void
 */
	public function testEditPostValidationError() {
		$this->_mockForReturnFalse('TODO:MockにするModel名書く', 'TODO:Mockにするメソッド名書く');

		//テスト実行
		$this->_testPostAction('put', $this->__data(),
				array('action' => 'edit'), null, 'view');
		//$this->_testPostAction('put', $this->__data(),
		//		array('action' => 'edit'), 'BadRequestException', 'view');

		//TODO:必要に応じてassert書く
	}

}
