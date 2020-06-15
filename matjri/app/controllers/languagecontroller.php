<?php

namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;

class LanguageController extends AbstractController
{
	use Helper;

	public function defaultAction()
	{
		$this->redirect($_SERVER['HTTP_REFERER']);
	}

	public function arAction()
	{
		$_SESSION['lang'] = 'ar';
		$this->redirect($_SERVER['HTTP_REFERER']);
	}

	public function enAction()
	{
		$_SESSION['lang'] = 'en';
		$this->redirect($_SERVER['HTTP_REFERER']);
	}
}