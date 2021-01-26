<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name','last_name', 'email', 'phone_number', 'comments', 'guests', 'room_id', 'pet', 'breakfast','check_in_date', 'check_out_date'
    ];
}