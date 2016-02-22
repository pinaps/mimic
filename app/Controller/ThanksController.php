<?php

namespace Controller;

use \W\Controller\Controller;

class ThanksController extends Controller
{

	/**
	 * Page de remerciements et d'explications
	 */
	public function index()
	{
		$this->show('thanks/index');
	}


}