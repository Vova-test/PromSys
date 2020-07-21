<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Concerns\UsesUuid;

class Grant extends Model
{
    use SoftDeletes;
	use UsesUuid;

	protected $guarded = [];
}
