<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Job;
class PageController extends Controller
{
    public function about()
    {
        return view('layouts.about');
    }

    public function services()
    {
        return view('layouts.services');
    }

    public function contact()
    {   
        
        $jobs = Job::all();
    
    
        $developmentJobs = $jobs->where('type', 'Development')->where('is_published', 1)->all();
        $designJobs = $jobs->where('type', 'Designing')->where('is_published', 1)->all();
        $marketingJobs = $jobs->where('type', 'Marketing')->where('is_published', 1)->all();


        return view('layouts.contact', compact('designJobs', 'developmentJobs','marketingJobs'));
    }

     
public function getJobDescription($category, $jobId)
{
    // Read JSON file
    $jsonFile = File::get(public_path('jobs.json'));
    $data = json_decode($jsonFile, true);

    // Find job by category and id
    $description = null;
    if (isset($data[$category]) && isset($data[$category][$jobId])) {
        $description = $data[$category][$jobId]['description'];
    }

    return response()->json(['description' => $description]);
}
    


    public function projects()
    {
        return view('layouts.projects');
    }
    
}
