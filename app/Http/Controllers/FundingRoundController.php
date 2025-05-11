<?php

namespace App\Http\Controllers;

use App\Models\FundingRound;
use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FundingRoundController extends Controller
{
    public function index()
    {
        $fundingRounds = FundingRound::with('startup')->get();
        return view('funding_rounds.index', compact('fundingRounds'));
    }

    public function create()
    {
        $startups = Startup::where('founder_id', Auth::id())->get(); // entrepreneur's startups
        return view('funding_rounds.create', compact('startups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'startup_id' => 'required|exists:startups,id',
            'target_amount' => 'required|numeric',
            'round_type' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        FundingRound::create([
            'startup_id' => $request->startup_id,
            'target_amount' => $request->target_amount,
            'amount_raised' => 0.00,
            'round_type' => $request->round_type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'open',
        ]);

        return redirect()->route('funding-rounds.index')->with('success', 'Funding round created successfully.');
    }

    public function show(FundingRound $fundingRound)
    {
        return view('funding_rounds.show', compact('fundingRound'));
    }

    public function edit(FundingRound $fundingRound)
    {
        $startups = Startup::where('founder_id', Auth::id())->get();
        return view('funding_rounds.edit', compact('fundingRound', 'startups'));
    }

    public function update(Request $request, FundingRound $fundingRound)
    {
        $request->validate([
            'target_amount' => 'required|numeric',
            'round_type' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:open,closed',
        ]);

        $fundingRound->update($request->only([
            'target_amount',
            'round_type',
            'start_date',
            'end_date',
            'status'
        ]));

        return redirect()->route('funding-rounds.index')->with('success', 'Funding round updated.');
    }

    public function destroy(FundingRound $fundingRound)
    {
        $fundingRound->delete();
        return redirect()->route('funding-rounds.index')->with('success', 'Funding round deleted.');
    }
}
