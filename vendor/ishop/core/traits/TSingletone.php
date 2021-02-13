<?php


namespace ishop\traits;


trait TSingletone
{
	private static $instance;

	private function __construct()
	{
	}

	public static function Instance()
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

}