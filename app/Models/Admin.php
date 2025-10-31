<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_no',
        'address',
        'role_id',
        'salary',
        'salary_perday',
        'duty_shift',
        'blood_group',
    ];
}
