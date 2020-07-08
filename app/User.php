<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\Model;

class User extends EloquentUser
{
    const ROLE_CUSTOMER = "Customer";
    const ROLE_ADMIN = "Administrator";


    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
