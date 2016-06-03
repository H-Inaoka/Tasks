<?php
/**
 * Task Component
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('Component', 'Controller');

/**
 * Task Component
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Tasks\Controller\Component
 */
class TaskComponent extends Component {

/**
 * view status incomplete
 *
 * @var string
 */
	const TASK_STATUS_INCOMPLETE = '1';

/**
 * view status completed
 *
 * @var string
 */
	const TASK_STATUS_COMPLETED = '2';

/**
 * view status all complete
 *
 * @var string
 */
	const TASK_STATUS_ALL_TASK = 3;

/**
 * view status all complete
 *
 * @var string
 */
	const TASK_CATEGORIES_ALL = 4;

}
