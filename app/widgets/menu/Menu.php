<?php

namespace app\widgets\menu;

use ishop\App;

class Menu
{
	protected $data;
	protected $tree;
	protected $menuHtml;
	protected $tpl;
	protected $container = 'ul';
	protected $table = 'category';
	protected $cache = 3600;
	protected $cacheKey = 'ishop_menu';
	protected $attrs = [];
	protected $prepend = '';

	public function __construct()
	{
	}
}