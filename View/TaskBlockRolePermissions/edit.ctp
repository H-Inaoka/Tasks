<?php
/*
 * 権限設定 template
 *
 * プラグイン「回覧板」を参考、参考ファイル：CircularNoticeBlockRolePermissions/edit.ctp
 */
?>

<div class="block-setting-body">

	<?php echo $this->BlockTabs->main(BlockTabsHelper::MAIN_TAB_PERMISSION); ?>
	<div class="tab-content">

		<?php echo $this->element('Blocks.edit_form', array(
//			'model' => 'CircularNoticeFrameSetting',
//			'callback' => 'CircularNotices.CircularNoticeBlockRolePermissions/edit_form',
			'cancelUrl' => NetCommonsUrl::backToPageUrl(),
		)); ?>

	</div>

</div>
