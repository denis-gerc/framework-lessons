<?php

namespace app\controllers;

class MainController extends AppController
{

	public function indexAction()
	{
		$posts = \R::findAll('test');
		$post = \R::findOne('test', 'id=?', [1]);
		$this->setMeta('Главная страница', "Описание страницы", "Ключевые слова страницы");

//		Вариант-1
//		$this->set(['name' => 'DenisGerc', 'age' => '40']);

//		Вариант-2
		$name = 'DenisGerc';
		$age = 40;
		$names = ['Victor', 'Anrey', 'Julios'];
		$this->set(compact('name', 'age', 'names', 'posts'));
	}

}