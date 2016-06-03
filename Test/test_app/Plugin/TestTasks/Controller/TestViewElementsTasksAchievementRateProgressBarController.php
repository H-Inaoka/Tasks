<?php
/**
 * View/Elements/Tasks/achievement_rate_progress_barテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * View/Elements/Tasks/achievement_rate_progress_barテスト用Controller
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Test\test_app\Plugin\TestTasks\Controller
 */
class TestViewElementsTasksAchievementRateProgressBarController extends AppController {

/**
 * achievement_rate_progress_bar
 *
 * @return void
 */
	public function achievement_rate_progress_bar() {
		$this->autoRender = true;
	}

}
