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
	public $scripts = [];

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
		if (is_array($data)) extract($data);
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
				ob_start();
				require_once $layoutFile;
				$scriptsTemplate = ob_get_clean();
				$scripts = [];
				$notScriptsTemplate = $this->cutScript($scriptsTemplate);
				$scripts = $this->scripts[0];

				if (!empty($this->scripts[0])) {
					$scripts = $this->scripts[0];
				}
				$scripts = str_replace('</script>', '</script>' . PHP_EOL, $scripts);
				$layoutFile = str_replace('</body>', implode($scripts) . '</body>', $notScriptsTemplate);
				echo $layoutFile;
			} else {
				throw new \Exception("Не найден {$this->layout}", 500);
			}
		}
	}

	public function getMeta()
	{
		$head = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
		$head .= '<meta name="keywords" content= "' . $this->meta['keywords'] . '">' . PHP_EOL;
		$head .= '<meta name="description" content= "' . $this->meta['desc'] . '">' . PHP_EOL;
		return $head;
	}

	protected function cutScript($content)
	{
		$pattern = "#<script.*?>.*?</script>#is";
		preg_match_all($pattern, $content, $this->scripts);
		if (!empty($this->scripts)) {
			$content = preg_replace($pattern, '', $content);
		}
		return $content;
	}

}