<?php

class Whoops extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//
		global $equrl;

		$this->missing = $equrl[0];

		$this->title = '404';
		$this->header = 'ready';

		$this->loadPage();

		$this->render('index');
		$this->loadFooter();
	}
}
