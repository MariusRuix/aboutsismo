<?php

namespace App\Models;

use App\Models\Traits\Presentable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\ { Builder, SoftDeletes };

class User extends Authenticatable
{
    use Notifiable,
        Presentable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
        'password',
        'provisional_password',
        'first_login',
        'last_login'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['first_login', 'last_login', 'deleted_at'];

    /**
     * The model presenter full class path.
     *
     * @var string
     */
    //protected $presenter = UserPresenter::class;

    /**
     * Check if the user has an active account.
     *
     * @return bool
     */
    public function isActive() : bool
    {
        return is_null($this->deleted_at) and $this->active;
    }

    /**
     * Check if the user has an active account.
     *
     * @return bool
     */
    public function isAdmin() : bool
    {
        return ends_with($this->email, ['@datacreativa.rocks']);
    }

    /*
    |--------------------------------------------------------------------------
    | Eloquent Mutators
    |--------------------------------------------------------------------------
    */

    /**
     * Hash the password before saving.
     *
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() : HasMany
    {
        return $this->hasMany(Article::class);
    }
}
