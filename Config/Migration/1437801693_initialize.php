<?php
/**
 * Tasks CakeMigration
 *
 * @author Yuto Kitatsuji <Kitatsuji.Yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * Tasks CakeMigration
 *
 * @author Yuto Kitatsuji <Kitatsuji.Yuto@withone.co.jp>
 * @package NetCommons\Tasks\Config\Migration
 */
class Initialize extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'initialize';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'tasks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'ID |  |  | '),
					'indexes' => array(
							'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
				)
			)
		),
		'down' => array(
			'drop_table' => array(
				'tasks'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
