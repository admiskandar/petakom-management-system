<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionData extends Model
{
    use HasFactory;
    
    protected $table='election';
    protected $fillable = [
        'candidate_name',
        'candidate_picture',
        'candidate_faculty',
        'candidate_year',
        'candidate_course',
        'candidate_manifesto',
        'election_year',
        'total_vote',
    ];

    public function voter(){
        
        return $this->hasmany(VoterData::class);


    }

}
