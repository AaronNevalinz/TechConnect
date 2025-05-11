@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4 bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">Create Funding Round</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('funding-rounds.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="startup_id" class="block font-medium">Startup</label>
            <select name="startup_id" id="startup_id" class="w-full border p-2 rounded">
                @foreach ($startups as $startup)
                    <option value="{{ $startup->id }}">{{ $startup->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="target_amount" class="block font-medium">Target Amount (UGX)</label>
            <input type="number" step="0.01" name="target_amount" id="target_amount" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="round_type" class="block font-medium">Round Type</label>
            <input type="text" name="round_type" id="round_type" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label for="start_date" class="block font-medium">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label for="end_date" class="block font-medium">End Date</label>
            <input type="date" name="end_date" id="end_date" class="w-full border p-2 rounded">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
