<?php

namespace Controller;

use \W\Controller\Controller;

class RegisterController extends Controller
{

	/**
	 * Page d'index d'enregistrement
	 */
	public function index()
	{
		$this->show('register/index');
	}

}