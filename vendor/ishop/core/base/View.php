<?php

namespace ishop\base;

class View
{
	public $route;
	public $controller;
	public $model;
	public $view;
	public $layout;
	public $prefix = '';
	public $data = [];
	public $meta = [];

	public function __construct($route, $layout = '', $view = '', $meta)
	{
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->view = $view;
		$this->model = $route['controller'];
		$this->prefix = $route['prefix'];
		$this->meta = $meta;

		if ($layout === false) {
			$this->layout = false;
		} else {
			$this->layout = $layout ?: LAYOUT;
		}

	}

	public function render($data)
	{
		$viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";

		if (is_file($viewFile)) {
			ob_start();
			require_once $viewFile;
			$content = ob_get_clean();
		} else {
			throw new \Exception("Не найден {$viewFile}", 500);
		}

		if (false !== $this->layout) {
			$layoutFile = APP . "/views/layouts/{$this->layout}.php";
			if (is_file($layoutFile)) {
				require_once $layoutFile;
			} else {
				throw new \Exception("Не найден {$this->layout}", 500);
			}
		}
	}

	public function getMeta()
	{
		$head = '<head>' . PHP_EOL;
		$head .= '<meta charset="UTF-8">'. PHP_EOL;
		$head .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">'. PHP_EOL;
		$head .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">'. PHP_EOL;
		$head .= "<meta name=\"keywords\" content=\"{$this->meta['keywords']}\" />". PHP_EOL;
		$head .= "<meta name=\"description\" content=\"{$this->meta['desc']}\" />". PHP_EOL;
		$head .= "<title>{$this->meta['title']}</title>". PHP_EOL;
		$head .= '</head>'. PHP_EOL;
		return $head;
	}
}