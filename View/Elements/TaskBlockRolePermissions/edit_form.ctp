<?php
/**
 * TaskSettings edit template
 */
?>

<?php echo $this->Form->hidden('Block.id', array(
		'value' => Current::read('Block.id'),
	)); ?>

<?php echo $this->Form->hidden('TaskSetting.id', array(
		'value' => isset($taskSetting['id']) ? (int)$taskSetting['id'] : null,
	)); ?>

<?php echo $this->Form->hidden('TaskSetting.key', array(
		'value' => isset($taskSetting['key']) ? $taskSetting['key'] : null,
	)); ?>

<?php
	echo $this->element('Blocks.block_creatable_setting', array(
			'settingPermissions' => array(
				'content_category_creatable' => __d('tasks', 'Content category creatable roles'),
				'content_creatable' => __d('tasks', 'Content creatable roles'),
				'content_comment_creatable' => __d('tasks', 'Content comment creatable roles'),
			),
		)
	);
