<?php

App::uses('AppController', 'Controller');

class TasksAppController extends AppController {
	
	/**
	 * use models
	 * 
	 * @var array
	 */
	public $uses = array (
		
	);
	
	/**
	 * use component
	 * 
	 * @var array
	 */
	public $components = array (
		'Pages.PageLayout',

	);

	/**
	 * use helpers
	 * 
	 * @var array
	 */
	public $helper = array (
		
	);

	/**
	 * beforeFilter
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		
	}

	/**
	 * Initialize tasks
	 */
	public function initTask() {
		
	}

}
