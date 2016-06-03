<?php
/**
 * task index template
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<h1>
    <?php echo h(__d('tasks', 'Task')); ?>
</h1>

<div class="panel panel-default">

    <?php echo $this->NetCommonsForm->create('TaskContent', array(
        'name' => 'form',
        'novalidate' => true,
    )); ?>

    <div class="panel-body">

        <fieldset>

            <?php echo $this->NetCommonsForm->input('tasks.title', array(
                'type' => 'text',
                'label' => __d('tasks', 'Title'),
            )); ?>

            <?php echo $this->NetCommonsForm->label(__d('tasks', 'Category')); ?>
            
            <?php echo $this->NetCommonsForm->select('tasks.category', array(
                $categories,
            )); ?>

            <?php echo $this->element('Tasks/content_edit_form'); ?>

        </fieldset>
    </div>
    <div class="panel-footer text-center">
        <?php echo $this->Button->cancelAndSaveAndSaveTemp(); ?>
    </div>

    <?php echo $this->NetCommonsForm->end(); ?>

    <?php if ($this->request->params['action'] === 'edit') : ?>
        <div class="panel-footer text-right">
            <?php echo $this->element('CircularNotices/delete_form'); ?>
        </div>
    <?php endif; ?>
</div>
                
