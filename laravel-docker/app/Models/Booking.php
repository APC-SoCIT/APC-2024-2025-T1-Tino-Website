<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_type',
        'date',
        'time',
        'first_name',
        'last_name',
        'country',
        'phone',
        'email',
        'preferred_channel',
        'category_of_interest',
        'number_of_people',
        'additional_info',
    ];
}
