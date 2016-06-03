<?php
/**
 * task select status for view element
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

	$params = $this->params['named'];
	$params['page'] = 1;
	$url = Hash::merge(array(
		'controller' => 'tasks',
		'action' => 'index'),
		$params);
	
	$currentStatus = isset($this->Paginator->params['named']['status']) ? $this->Paginator->params['named']['status'] : '';
	
	if (empty($currentStatus)) :
		$currentStatus = TaskComponent::TASK_STATUS_INCOMPLETE;
	endif;
	
	$options = array();

	$options = array(
		'TaskContents.status_' . TaskComponent::TASK_STATUS_INCOMPLETE => array(
			'label' => __d('tasks', 'Incomplete task'),
			'status' => 1,
		),
		'TaskContents.status_' . TaskComponent::TASK_STATUS_COMPLETED => array(
				'label' => __d('tasks', 'Completed task'),
				'status' => 2,
		),
		'TaskContents.status_' . TaskComponent::TASK_STATUS_ALL_TASK => array(
				'label' => __d('tasks', 'All task'),
				'status' => TaskComponent::TASK_STATUS_ALL_TASK,
		),
	);
?>

<span class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		<?php echo h($options['TaskContents.status_' . $currentStatus]['label']); ?>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<?php foreach ($options as $key => $status) : ?>
			<li>
				<?php echo $this->NetCommonsHtml->link($status['label'],
					Hash::merge($url, array('status' => $status['status']))
				); ?>
			</li>
		<?php endforeach; ?>
	</ul>
</span>
