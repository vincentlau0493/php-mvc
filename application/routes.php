<?php

	//your routes
	Router::get('/', 'StaticController', 'index');


	//raise 404
	Router::errorHandle('ErrorController', 'notFound');