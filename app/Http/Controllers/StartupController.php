<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Startup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class StartupController extends Controller
{
    public function index()
    {
        $startups = auth()->user()->startups()->latest()->get();
        return view('startups.index', compact('startups'));
    }

    public function create()
    {
        return view('startups.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'industry' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048', // 2MB max
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('startup-logos', 'public');
            $validated['logo'] = $path;
        }

        $startup = auth()->user()->startups()->create($validated);

        return redirect()->route('startups.index')
            ->with('success', 'Startup created successfully.');
    }

    public function edit(Startup $startup)
    {
        if (auth()->user()->id !== $startup->founder_id) {
            abort(403, 'Unauthorized action.');
        }
        return view('startups.edit', compact('startup'));
    }

    public function update(Request $request, Startup $startup)
    {
        if (auth()->user()->id !== $startup->founder_id) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'industry' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048', // 2MB max
        ]);

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($startup->logo) {
                Storage::disk('public')->delete($startup->logo);
            }
            $path = $request->file('logo')->store('startup-logos', 'public');
            $validated['logo'] = $path;
        }

        $startup->update($validated);

        return redirect()->route('startups.index')
            ->with('success', 'Startup updated successfully.');
    }

    public function destroy(Startup $startup)
    {
        if (auth()->user()->id !== $startup->founder_id) {
            abort(403, 'Unauthorized action.');
        }

        $startup->delete();

        return redirect()->route('startups.index')
            ->with('success', 'Startup deleted successfully.');
    }
}
