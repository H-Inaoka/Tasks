<?php
/**
 * task achievement rate progress bar for view element
 *
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<div class="pull-right hidden-xs">
	<div class="clearfix">
		<div class="pull-left">
			<div class="progress" style="width: 200px; margin-bottom: 5px; height: 20px;">
				<div class="progress-bar progress-bar-success" style="width: <?php echo $achieved_value; ?>%;">
				</div>
			</div>
		</div>
		<div class="pull-right text-center">
			<div style="width: 100px;">
				<?php echo $achieved_value; ?>
				%(
				<?php echo $number_of_tasks; ?>
				/
				<?php echo $number_of_completed_tasks; ?>
				)
			</div>
		</div>
	</div>
</div>
