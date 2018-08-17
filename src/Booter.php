<?php

namespace Fizzday\Booter;

use Illuminate\Database\Capsule\Manager as Capsule;

class Booter 
{
	/**
	 * 驱动 Eloquent
	 */
	public static function bootEloquent($config)
	{
		$capsule = new Capsule;

		$dbConnections = $config["connections"];
		$default = $config["default"];

		$dbConfig = $dbConnections[$default];

		$capsule->addConnection($dbConfig);

		// 全局注册
		$capsule->setAsGlobal();

		// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
		$capsule->bootEloquent();
	}
}