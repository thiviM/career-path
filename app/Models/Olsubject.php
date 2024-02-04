<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olsubject extends Model
{
    use HasFactory;

    protected $fillable = ['ol_subject_title', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
