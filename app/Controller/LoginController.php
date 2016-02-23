<?php

namespace Controller;

use \W\Controller\Controller;

class LoginController extends Controller
{

	/**
	 * Page d'index de connexion
	 */
	public function index()
	{
		$this->show('login/index');
	}

}