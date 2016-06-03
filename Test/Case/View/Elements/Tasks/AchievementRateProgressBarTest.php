<?php
/**
 * View/Elements/Tasks/achievement_rate_progress_barのテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * View/Elements/Tasks/achievement_rate_progress_barのテスト
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\Case\View\Elements\Tasks\AchievementRateProgressBar
 */
class TasksViewElementsTasksAchievementRateProgressBarTest extends NetCommonsControllerTestCase {

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
		$this->generateNc('TestTasks.TestViewElementsTasksAchievementRateProgressBar');
	}

/**
 * View/Elements/Tasks/achievement_rate_progress_barのテスト
 *
 * @return void
 */
	public function testAchievementRateProgressBar() {
		//テスト実行
		$this->_testGetAction('/test_tasks/test_view_elements_tasks_achievement_rate_progress_bar/achievement_rate_progress_bar',
				array('method' => 'assertNotEmpty'), null, 'view');

		//チェック
		$pattern = '/' . preg_quote('View/Elements/Tasks/achievement_rate_progress_bar', '/') . '/';
		$this->assertRegExp($pattern, $this->view);

		//TODO:必要に応じてassert追加する
		debug($this->view);
	}

}
