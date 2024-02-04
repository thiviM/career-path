<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    use HasFactory;

   protected $fillable = ['job_title'];

    public function streams()
    {
        return $this->hasMany(Stream::class, 'job_id');
    }
}