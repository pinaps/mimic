<?php

namespace Controller;

use \W\Controller\Controller;

class PublishController extends Controller
{


	/**
	 * Page d'index de publication
	 */
	public function index()
	{
		$this->show('publish/index');
	}

	public function submit()
	{
		print_r($_POST);
	}

}