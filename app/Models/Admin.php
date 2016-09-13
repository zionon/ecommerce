<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Admin extends Model implements AuthenticatableContract,
									 AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The database tables used by the model 
     * @var string
     */
    protected $table = 'admins';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'password'];

    /**
     * The attributes excluded from the model's JSON form
     * @var array
     */
    protected $hidden = ['password'];


}
