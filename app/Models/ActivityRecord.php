<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityRecord extends Model
{
    //use HasFactory;
    protected $table = "activities";

    protected $fillable = [
        'id',
        'activity_name',
        'activity_date',
        'activity_notes',
        'activity_venue',
        'created_id',
        'updated_id'

    ];
    
}
