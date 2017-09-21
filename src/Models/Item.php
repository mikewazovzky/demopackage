<?php

namespace Mikewazovzky\Demopackage\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	/**
	 * @var string $table  - table name for the model,
	 * 	needed if different from plurified model name
	 */
	protected $table = 'mikewazovzky_items';
	/**
	 * @var array of strings $fillable
	 *	list of items allowed for mass assignment
	 */
	protected $fillable = ['name', 'description'];
}
