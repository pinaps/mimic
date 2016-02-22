<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/merci', 'Thanks#index', 'merci'],

		['GET', '/publier', 'Publish#index', 'publier'],
		['GET', '/publier/', 'Publish#index', 'publier2'],
		['GET', '/publiyer/', 'Publish#index', 'publier3'],
		['POST', '/publier', 'Publish#submit', 'publierPost'],


	);