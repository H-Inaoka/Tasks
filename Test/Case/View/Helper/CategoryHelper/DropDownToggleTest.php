<?php
/**
 * CategoryHelper::dropDownToggle()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsHelperTestCase', 'NetCommons.TestSuite');

/**
 * CategoryHelper::dropDownToggle()のテスト
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\Case\View\Helper\CategoryHelper
 */
class CategoryHelperDropDownToggleTest extends NetCommonsHelperTestCase {

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

		//テストデータ生成
		//TODO:必要に応じてセットする
		$viewVars = array();
		$requestData = array();
		$params = array();

		//Helperロード
		$this->loadHelper('Tasks.Category', $viewVars, $requestData, $params);
	}

/**
 * dropDownToggle()のテスト
 *
 * @return void
 */
	public function testDropDownToggle() {
		//データ生成
		$options = array();

		//テスト実施
		$result = $this->Category->dropDownToggle($options);

		//チェック
		//TODO:assertを書く
		debug($result);
	}

}
