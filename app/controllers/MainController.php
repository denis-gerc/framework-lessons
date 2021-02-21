<?php

namespace app\controllers;

class MainController extends AppController
{

	public function indexAction()
	{
		// echo __METHOD__;
		$this->setMeta('Главная страница', "Описание страницы", "Ключевые слова страницы");

//		Вариант-1
//		$this->set(['name' => 'DenisGerc', 'age' => '40']);

//		Вариант-2
		$name = 'DenisGerc';
		$age = 40;
		$names=['Victor', 'Anrey', 'Julios'];
		$this->set(compact('name', 'age', 'names'));
	}



}