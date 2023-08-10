<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class BlogUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name','email','dob','password'];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

}
