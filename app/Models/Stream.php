<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    protected $fillable = ['stream_title', 'job_id'];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'stream_id');
    }
}
