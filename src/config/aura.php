<?php

return [
	"route_prefix" => "aura",

	'paginate' => 100,

	"models" => [
		'user' => [
			'model_name' => 'App\Models\User',
			'exclude_columns' => ['password', 'two_factor_secret', 'two_factor_recovery_codes', 'pgp', 'created_at'],
			'route_prefix' => '/users',
		],
	]
];