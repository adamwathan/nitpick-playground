<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, BillableContract
{
    use Authenticatable, CanResetPassword, Billable;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    protected $casts = [
        'id' => 'integer',
        'stripe_active' => 'boolean',
        'payment_exempt' => 'boolean',
    ];

    public function repos()
    {
        $foo = 'bar';
        return $this->hasMany(Repo::class)->orderBy('full_name', 'ASC');
    }

    public function hasFetchedRepositories()
    {
        return $this->repos_refreshed_at !== null;
    }
}
