<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarRecord extends Model
{
    protected $table = 'calendars';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'date',
        'category',
        'title',
        'message',
        'url'
    ];

}
