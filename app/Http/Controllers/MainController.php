<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; 
use App\Models\Stream; 
use App\Models\Subject;
use App\Models\Olsubject;



class MainController extends Controller
{


    public function index()
    {
        return view('partials.jobs');
    }

    public function getJobs()
    {
        $jobs = Job::all();
        return response()->json($jobs);
    }

    public function getStream($jobId)
{
    $streams = Job::find($jobId)->streams;

    return response()->json($streams);
}

    public function getSubject($streamId)
    {
        $subjects = Stream::find($streamId)->subjects;

        return response()->json($subjects);
    }

    public function getOrdinaryLevelSubject($subjectId)
    {
        $ordinaryLevelSubject = Subject::find($subjectId)->ordinaryLevelSubjects;

        return response()->json($ordinaryLevelSubject);
    }

    
}
