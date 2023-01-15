<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportRecord extends Model
{
    use HasFactory;

    protected $table = 'proposals';

    protected $fillable = ['title', 'objective', 'organizer', 'start_date', 'end_date', 'start_time', 'end_time', 'location', 'participation', 'budget', 'status', 'user_id'];

    public function insertToProposals()
    {
        $this->save();
    }

    public function insertToReports()
    {
        $this->setTable('reports');
        $this->save();
    }
}


// $myModel->setTable('reports');
// $myModel->column1 = 'proposal_id';
// $myModel->column2 = 'date';
// $myModel->column2 = 'status';
// $myModel->save();
