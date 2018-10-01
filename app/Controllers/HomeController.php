<?php

/**
 * 
 */

debug_backtrace() || die ("Direct access not permitted");

class HomeController
{
	public function index(){
		$template = new Template('./public/views/index.inc.php');
		$template->assign('title','Flight');
		$template->assign('link','https://github.com/sahamnadeem/Flight');
		$template->render();
	}

	public function example(){
		$template = new Smarty();
		$template->template_dir = './public/views';
		$template->compile_dir = './public/tmp';
		$template->assign('title','Flight');
		$template->display('home.inc.php');
	}
}