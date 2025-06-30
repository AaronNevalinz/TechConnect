<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (Auth::check()) {
        $startups = Auth::user()->startups;
        $jobs = Job::whereIn('startup_id', $startups->pluck('id'))->get();
    } else {
        $jobs = Job::all(); // or [] if you want guests to see no jobs
    }

    return view('jobs.index', compact('jobs'));
}

public function homePageWithJobs()
{
    if (Auth::check()) {
        $startups = Auth::user()->startups;
        $jobs = Job::whereIn('startup_id', $startups->pluck('id'))->paginate(10);
    } else {
        $jobs = Job::paginate(10); // or [] if guests shouldn't see jobs
    }

    return view('welcome', compact('jobs'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Job::class);
        $startups = Auth::user()->startups;
        return view('jobs.create', compact('startups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create', Job::class);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'startup_id' => 'required|exists:startups,id',
            'status' => 'required|in:draft,published,closed',
        ]);

        $job = Job::create($validated);

        return redirect()->route('jobs.index')
            ->with('success', 'Job created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        Gate::authorize('view', $job);
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        Gate::authorize('update', $job);
        $startups = Auth::user()->startups;
        return view('jobs.edit', compact('job', 'startups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        Gate::authorize('update', $job);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'salary_range' => 'nullable|string|max:255',
            'startup_id' => 'required|exists:startups,id',
            'status' => 'required|in:draft,published,closed',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.index')
            ->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('delete', $job);
        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully.');
    }
}
