<?php
/**
 * Tasks Controller
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('TasksAppController', 'Tasks.Controller');

/**
 * tasks Controller
 *
 * @author Yuto Kitatsuji <Kitatsuji.Yuto@withone.co.jp>
 * @package NetCommons\Tasks\Controller
 */
class TasksController extends TasksAppController {

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
		'Tasks.Task'
	);

/**
 * beforeFilters
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
	}

/**
 * use helpers
 *
 * @var array
 */
	public $helpers = array(

	);

/**
 * index action
 *
 * @return void
 */
	public function index() {
		
		$closeToDeadlineTasks = array();
		$task_contents = array();

		// 疑似的な期限間近のToDoデータ
		$closeToDeadlineTasks[] = array(
				'title' => '4月職員間の情報共有ミーティング',
				'period' => '2016-03-31 15:00:00',
				'user' => array(
						'id' => '2',
						'username' => 'admin',
						'handlename' => '編集長'
				)
		);

		// 疑似的なカテゴリごとのToDoデータ
		$task_contents['content'] = array(
				'共通' => array(
						'is_achievement_rate' => false,
						'achieved_value' => null,
						'number_of_tasks' => 3,
						'number_of_completed_tasks' => 0,
						'contents' => array(
								0 => array(
										'title' => '4月職員間の情報共有ミーティング',
										'period' => '2016-03-31 15:00:00',
										'user' => array(
												'id' => '2',
												'handlename' => '編集長'
										)
								),
								1 => array(
										'title' => '5月職員間の情報共有ミーティング',
										'period' => '2016-04-30 15:00:00',
										'user' => array(
												'id' => '2',
												'handlename' => '編集長'
										)
								),
								2 => array(
										'title' => '6月職員間の情報共有ミーティング',
										'period' => '2016-05-31 15:00:00',
										'user' => array(
												'id' => '2',
												'handlename' => '編集長'
										)
								)
						)
				),
				'買い物リスト' => array(
						'is_achievement_rate' => true,
						'achieved_value' => 75,
						'number_of_tasks' => 4,
						'number_of_completed_tasks' => 3,
						'contents' => array(
								0 => array(
										'title' => '球技大会で使用するボール各種',
										'period' => '2016-05-10 12:00:00',
										'user' => array(
												'id' => '4',
												'handlename' => '一般'
										)
								),
								1 => array(
										'title' => '調理学習で使用する食材',
										'period' => '2016-05-10 12:00:00',
										'user' => array(
												'id' => '4',
												'handlename' => '一般'
										)
								),
								2 => array(
										'title' => '来客用の茶菓子',
										'period' => '2016-05-10 12:00:00',
										'user' => array(
												'id' => '4',
												'handlename' => '一般'
										)
								),
								3 => array(
										'title' => '事務局備品',
										'period' => '2016-05-10 12:00:00',
										'user' => array(
												'id' => '4',
												'handlename' => '一般'
										)
								)
						)
				)
		);
		
		$this->set('closeToDeadlineTasks', $closeToDeadlineTasks);
		$this->set('task_contents', $task_contents);
	}

/**
 * index add
 *
 * @return void
 */
	public function add() {
		
		$this->view = 'edit';

		$categories = array();

		// 疑似的なカテゴリの値
		$categories = array('共通','カテゴリ1','カテゴリ2');

		$this->set('categories', $categories);
	}

/**
 * index edit
 *4
 * @return void
 */
	public function edit() {
		
	}
	
}
