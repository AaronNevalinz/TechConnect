@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4 bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">Edit Funding Round</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('funding-rounds.update', $fundingRound->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="startup_id" class="block font-medium">Startup</label>
            <select name="startup_id" id="startup_id" class="w-full border p-2 rounded" required>
                @foreach ($startups as $startup)
                    <option value="{{ $startup->id }}" {{ $fundingRound->startup_id == $startup->id ? 'selected' : '' }}>
                        {{ $startup->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="target_amount" class="block font-medium">Target Amount (UGX)</label>
            <input type="number" step="0.01" name="target_amount" id="target_amount" class="w-full border p-2 rounded" value="{{ $fundingRound->target_amount }}" required>
        </div>

        <div class="mb-4">
            <label for="amount_raised" class="block font-medium">Amount Raised (UGX)</label>
            <input type="number" step="0.01" name="amount_raised" id="amount_raised" class="w-full border p-2 rounded" value="{{ $fundingRound->amount_raised }}">
        </div>

        <div class="mb-4">
            <label for="status" class="block font-medium">Status</label>
            <select name="status" id="status" class="w-full border p-2 rounded">
                <option value="open" {{ $fundingRound->status == 'open' ? 'selected' : '' }}>Open</option>
                <option value="closed" {{ $fundingRound->status == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
