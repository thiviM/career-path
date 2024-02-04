<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['subject_title', 'stream_id'];

    public function stream()
    {
        return $this->belongsTo(Stream::class, 'stream_id');
    }

    public function ordinaryLevelSubjects()
    {
        return $this->hasMany(Olsubject::class, 'subject_id');
    }
}
