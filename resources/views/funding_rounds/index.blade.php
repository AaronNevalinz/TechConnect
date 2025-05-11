@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Funding Rounds</h2>
        <a href="{{ route('funding-rounds.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">+ New Round</a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="border p-2">Startup</th>
                <th class="border p-2">Target</th>
                <th class="border p-2">Raised</th>
                <th class="border p-2">Status</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fundingRounds as $round)
                <tr>
                    <td class="border p-2">{{ $round->startup->name }}</td>
                    <td class="border p-2">{{ number_format($round->target_amount) }}</td>
                    <td class="border p-2">{{ number_format($round->amount_raised) }}</td>
                    <td class="border p-2">{{ ucfirst($round->status) }}</td>
                    <td class="border p-2">
                        <a href="{{ route('funding-rounds.edit', $round->id) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('funding-rounds.destroy', $round->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this round?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
