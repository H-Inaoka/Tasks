<?php
/**
 * 権限設定 template
 */
?>

<div class="block-setting-body">

	<?php echo $this->BlockTabs->main(BlockTabsHelper::MAIN_TAB_PERMISSION); ?>
	<div class="tab-content">

		<?php echo $this->element('Blocks.edit_form', array(
			'model' => '',
			'callback' => 'Tasks.TaskBlockRolePermissions/edit_form',
			'cancelUrl' => NetCommonsUrl::backToPageUrl('default_setting_action'),
		)); ?>

	</div>

</div>
