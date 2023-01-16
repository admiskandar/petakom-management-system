<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoterData extends Model
{
    use HasFactory;
    protected $table='voter';
    protected $fillable = [
        'user_id',
        'election_id',
        'vote_year',


    ];

    public function election(){

        return $this->belongsTo(ElectionData::class);
    }


}
