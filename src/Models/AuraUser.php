<?php

namespace CalvinKimani\Aura\Models;

use Illuminate\Database\Eloquent\Model;

class AuraUser extends Model
{
	protected $modelName;
	protected $table;

	public function __construct()
	{
		parent::__construct();
		$this->modelName = config('aura.models.user.model_name');
		$this->table = (new $this->modelName)->getTable();
	}
}
