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

<div class="panel-body block">
	<div class="ng-scope">
		<div class="clearfix" style="margin-top: 10px; margin-bottom: 10px;">
			<div class="pull-left">
				<?php echo $this->BackTo->indexLinkButton(__d('tasks','Categories list'), 'index', Hash::merge(['icon' => 'list'], array())) ?>
			</div>
			
			<div class="pull-right">
				<span class="nc-tooltip" tooltip="<?php echo h(__d('net_commons', 'Add')); ?>">
					<?php
					$addUrl = $this->NetCommonsHtml->url(array(
							'controller' => 'tasks',
							'action' => 'add',
					));
					echo $this->Button->addLink('', 
							$addUrl,
							array('tooltip' => __d('net_commons', 'Add')));
					?>
				</span>
			</div>
		</div>
		
		<div class="clearfix">
			<div class="pull-left">
				<span class="btn-group">
					<?php echo $this->element('Tasks/select_status'); ?>
				</span>
				
				<span class="btn-group">
					<?php echo $this->Category->dropDownToggle(array(
							'empty' => false,
							'displayMenu' => false,
							$this->NetCommonsHtml->url(array('action' => 'index')),
					)); ?>
				</span>
			</div>
		</div>
		
		<hr>
		
		<?php if(! isset($task_contents['content'])): ?>
			<div>
				<?php echo h(__d('tasks', 'Not task')); ?>
			</div>
		<?php else: ?>
			<?php if(isset($closeToDeadlineTasks)): ?>
				<div style="height: 25px;" class="clearfix">
					<div style="border-bottom-width: 5px;" class="pull-left">
						<?php echo h(__d('tasks', 'Close To Deadline')); ?>
					</div>
				</div>
				
				<table class="table table-hover">
					<tbody>
						<?php foreach($closeToDeadlineTasks as $closeToDeadlineTask):?>
							<tr class="warning">
								<td class="btn-group col-xs-1 col-ms-1 col-md-1 col-lg-1" style="vertical-align: middle;">
									<div data-toggle="buttons">
										<label class="btn btn-default">
											<input type="checkbox" autocomplete="off" checked="">
											<span class="glyphicon glyphicon-ok " style="color: #BBBBBB">
											</span>
										</label>
									</div>
								</td>
								<td style="vertical-align: middle;" class="col-xs-1 col-ms-1 col-md-1 col-lg-1">
									<?php echo $this->Date->dateFormat($closeToDeadlineTask['period']); ?>
								</td>
								<td class="col-xs-5 col-ms-5 col-md-5 col-lg-5" style="vertical-align: middle;">
									<?php echo h($closeToDeadlineTask['title']); ?>
								</td>
								<td class="hidden-xs" align="col-ms-4 col-md-4 col-lg-4" style="vertical-align: middle;">
									<?php echo $this->NetCommonsHtml->handleLink(array(
											'User' => $closeToDeadlineTask['user']
									), array(
											'avatar' => true
									), array(), 'User'); ?>
								</td>
								<td class="hidden-xs" align="col-ms-1 col-md-1 col-lg-1" style="vertical-align: middle;">
									<div class="pull-right">
										<div class="text-right">
											<?php echo $this->Button->editLink('',
													array(
															'controller' => 'tasks',
															'action' => 'edit',
													),
													array(
															'tooltip' => true,
													)
											); ?>
										</div>
									</div>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			<?php endif; ?>
				
			<?php foreach($task_contents['content'] as $category_name => $categories_contents): ?>
				<div class="clearfix" style="height: 25px;">
					<div style="border-bottom-width: 5px;" class="pull-left">
						<?php echo $category_name ?>
					</div>
					
					<?php if($categories_contents['is_achievement_rate'] === true): ?>
						<?php echo $this->element('Tasks/achievement_rate_progress_bar', array(
								'achieved_value' => $categories_contents['achieved_value'],
								'number_of_tasks' => $categories_contents['number_of_tasks'],
								'number_of_completed_tasks' => $categories_contents['number_of_completed_tasks'],
						)); ?> 
					<?php endif ;?>
				</div>
				
				<table class="table table-hover">
					<tbody>
						<?php foreach($categories_contents['contents'] as $content):?>
							<tr>
								<td class="btn-group col-xs-1 col-ms-1 col-md-1 col-lg-1" style="vertical-align: middle;">
									<div data-toggle="buttons">
										<label class="btn btn-default">
											<input type="checkbox" autocomplete="off" checked="">
												<span class="glyphicon glyphicon-ok " style="color: #BBBBBB">
												</span>
										</label>
									</div>
								</td>
								
								<td style="vertical-align: middle;" class="col-xs-1 col-ms-1 col-md-1 col-lg-1">
									<?php echo $this->Date->dateFormat($content['period']); ?>
								</td>
								
								<td class="col-xs-5 col-ms-5 col-md-5 col-lg-5" style="vertical-align: middle;">
									<?php echo h($content['title']); ?>
								</td>
								
								<td class="hidden-xs" align="col-ms-4 col-md-4 col-lg-4" style="vertical-align: middle;">
									<?php echo $this->NetCommonsHtml->handleLink(array(
											'User' => $content['user']
									), array(
											'avatar' => true
									), array(), 'User'); ?>
								</td>
								
								<td class="hidden-xs" align="col-ms-1 col-md-1 col-lg-1" style="vertical-align: middle;">
									<div class="pull-right">
										<div class="text-right">
											<?php echo $this->Button->editLink('',
													array(
															'controller' => 'tasks',
															'action' => 'edit',
													),
													array(
															'tooltip' => true,
													)
											); ?>
										</div>
									</div>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>