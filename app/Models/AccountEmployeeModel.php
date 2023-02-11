<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AccountEmployeeModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'account_employee';
    protected $fillable = [
        'nip',
        'email',
        'password',
        'is_aktif',
        'role'
    ];
    protected $hidden = [
        'password'
    ];
}
