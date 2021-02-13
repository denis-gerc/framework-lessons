<?php


namespace ishop;

use ishop\traits\TSingletone;

class Registry
{
	use TSingletone;

	protected static $properties = [];

	/**
	 * @return array|null
	 */
	public static function getProperty($name)
	{
		if (isset(Self::$properties[$name])) {
			return self::$properties[$name];
		}
		return null;

	}

	/**
	 * @param array $properties
	 */
	public function setProperty($name, $value)
	{
		self::$properties[$name] = $value;
	}

	public function getProperties()
	{
		return self::$properties;
	}

}