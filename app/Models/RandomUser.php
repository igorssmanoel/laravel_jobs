<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RandomUser extends Model
{
    use HasFactory;

    protected $fillable = [
        "uid",
        "password",
        "first_name",
        "last_name",
        "username",
        "email",
        "avatar",
        "gender",
        "phone_number",
        "social_insurance_number",
        "date_of_birth",
    ];
}
