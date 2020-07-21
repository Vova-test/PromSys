<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Concerns\UsesUuid;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use UsesUuid;

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
