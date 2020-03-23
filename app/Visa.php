<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'message',
        'country',
        'street',
        'profession',
        'destination',
        'typevisa',
        'civility',
        'maritalstatus',
    ];
}
