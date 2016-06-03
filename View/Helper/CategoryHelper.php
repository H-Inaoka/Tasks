<?php
/**
 * Category Helper
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppHelper', 'View/Helper');

/**
 * Category Helper
 *
 * カテゴリーの選択要素を提供します。<br>
 * [一覧での絞り込み](#dropdowntoggle)<br>
 * [コンテンツ登録時の選択](#select)<br>
 *
 * @author yuto Kitatsuji <nkitatsuji.yuto@withone.co.jp>
 * @package NetCommons\Categories\View\Helper
 */
class CategoryHelper extends AppHelper {

/**
 * Other helpers used by FormHelper
 *
 * @var array
 */
	public $helpers = array(
		'Html',
		'NetCommons.NetCommonsForm',
		'NetCommons.NetCommonsHtml',
	);

/**
 * Before render callback. beforeRender is called before the view file is rendered.
 *
 * Overridden in subclasses.
 *
 * @param string $viewFile The view file that is going to be rendered
 * @return void
 */
	public function beforeRender($viewFile) {
		$this->NetCommonsHtml->css('/categories/css/style.css');
		parent::beforeRender($viewFile);
	}

/**
 * Output categories drop down toggle
 *
 * 一覧での絞り込みを行う要素を提供します。
 *
 * #### サンプルコード
 * ```
 * <?php
 * 	echo $this->Category->dropDownToggle(
 * 		array(
 *			'empty' => true,
 *			'displayMenu' => true,
 *		)
 *	);
 * ?>
 * ```
 * #### 出力結果
 * ```
 * <ul class="dropdown-menu" role="menu">
 * 	<li class="active">
 * 		<a href="/faqs/faq_questions/index/4?frame_id=8">カテゴリ選択</a>
 * 	</li>
 * 	<li>
 * 		<a href="/faqs/faq_questions/index/4/category_id:1?frame_id=8">国語</a>
 * 	</li>
 * 	<li>
 * 		<a href="/faqs/faq_questions/index/4/category_id:2?frame_id=8">算数</a>
 * 	</li>
 * 	<li>
 * 		<a href="/faqs/faq_questions/index/4/category_id:3?frame_id=8">理科</a>
 * 	</li>
 * 	<li>
 * 		<a href="/faqs/faq_questions/index/4/category_id:4?frame_id=8">社会</a>
 * 	</li>
 * </ul>
 * ```
 *
 * @param array $options Array of options and HTML arguments.
 *   - `empty`: String is empty label.
 *   - `header`: String is header label.
 *   - `divider`: True is divider.
 *   - `displayMenu`: True is display menu. False is <li> tag only.
 *   - `displayEmpty`: True is empty display. False is not display.
 * @return string HTML tags
 */
	public function dropDownToggle($options = array()) {
		//カレントCategoryId
		if (isset($this->_View->params['named']['category_id'])) {
			$currentCategoryId = $this->_View->params['named']['category_id'];
		} else {
			$currentCategoryId = '1';
		}

		// カテゴリ用のテーブルがDB上位存在しないため一時的な値を入力
		$options = array(
				'empty' => false,
				'displayMenu' => true,
				'url' => array(
						'plugin' => 'tasks',
						'controller' => 'tasks',
						'action' => 'index',
						'?' => array(
								'frame_id' => '23',
						)
				)
		);

		// カテゴリ用のテーブルがDB上位存在しないため一時的な値を入力
		$this->_View->viewVars['categories'] = array(
				0 => array(
						'Category' => array(
								'id' => '1',
								'block_id' => '5',
								'key' => '3907c28c57a1ebedca3919ff483dc096',
								'language_id' => '2',
								'name' => '全てのカテゴリ',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28'
						),
						'CategoryOrder' => array(
								'id' => '1',
								'category_key' => '3907c28c57a1ebedca3919ff483dc096',
								'block_key' => 'a657aeadce9dfad39d967d89e9b1ea3c',
								'weight' => '1',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28',
						)
				),
				1 => array(
						'Category' => array(
								'id' => '2',
								'block_id' => '5',
								'key' => '55ff0896504a7eaec631fd31bbe4fe45',
								'language_id' => '2',
								'name' => 'カテゴリ1',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28'
						),
						'CategoryOrder' => array(
								'id' => '2',
								'category_key' => '55ff0896504a7eaec631fd31bbe4fe45',
								'block_key' => 'a657aeadce9dfad39d967d89e9b1ea3c',
								'weight' => '2',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28',
						)
				),
				2 => array(
						'Category' => array(
								'id' => '3',
								'block_id' => '5',
								'key' => '55ff0896504a7eaec631fd31bbe4fe45',
								'language_id' => '2',
								'name' => 'カテゴリ2',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28'
						),
						'CategoryOrder' => array(
								'id' => '3',
								'category_key' => '55ff0896504a7eaec631fd31bbe4fe45',
								'block_key' => 'a657aeadce9dfad39d967d89e9b1ea3c',
								'weight' => '2',
								'created_user' => '1',
								'created' => '2016-06-02 09:02:28',
								'modified_user' => '1',
								'modified' => '2016-06-02 09:02:28',
						)
				)
		);

		$options['categories'] = array();
		$options['categories'] = Hash::merge(
			$options['categories'],
			Hash::combine($this->_View->viewVars['categories'], '{n}.Category.id', '{n}.Category')
		);

		if (isset($options['header']) && $options['header']) {
			if (! is_string($options['header'])) {
				$options['header'] = __d('categories', 'Category');
			}
		}

		return $this->_View->element('Tasks.dropdown_toggle_category', array(
			'currentCategoryId' => $currentCategoryId,
			'options' => $options
		));
	}

}
