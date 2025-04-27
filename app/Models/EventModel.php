<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EventModelFactory;  // Correct factory reference

class EventModel extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return EventModelFactory::new();  // Correct factory class
    }

    protected $table = 'events';
    protected $guarded = [];
}
