<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\AbstractModel;
class LogoutController extends AbstractController
{
	public function defaultAction()
	{
	session_start();
	session_unset();
	session_destroy();
	header('Location: http://localhost/commerce/matjri/public');
	}



}
