<?php
/**
 * Tasks Controller
 *
 * @author Yuto Kitatsuji <Kitatsuji.Yuto@withone.co.jp>
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

	}
	
}
