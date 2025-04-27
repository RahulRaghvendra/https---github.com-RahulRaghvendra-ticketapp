<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    protected $table = 'bookings'; // Specify the table name if different
    protected $guarded = []; // Allow mass assignment for all fields

 
}
