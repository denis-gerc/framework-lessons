<?php

namespace app\controllers;

use app\widgets\currency\Currency;
use ishop\App;

class CurrencyController extends AppController
{

	public function changeAction()
	{
		$currency = !empty($_GET['curr']) ? $_GET['curr'] : null;

		if ($currency) {

			$currencies = App::$app->getProperty('currencies');

			foreach ($currencies as $key => $value) {
				if ($currency === $key) {
					setcookie('currency', $currency, time() + 3600 * 24 * 7, '/');
				}
			}
		}
		redirect();
	}
}
