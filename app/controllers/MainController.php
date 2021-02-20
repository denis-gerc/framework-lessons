<?php

namespace app\controllers;

use ishop\base\Controller;

class MainController extends AppController
{

	public function indexAction()
	{
		// echo __METHOD__;
		$this->setMeta("я заголовок страницы", "я описание страницы", "я ключевые слова страницы");
	}

}