@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sent Messages</h2>

    @if ($messages->count())
        <ul class="list-group">
            @foreach ($messages as $message)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <strong>To:</strong> {{ $message->receiver->name }} <br>
                        <strong>Subject:</strong> {{ $message->subject ?? 'No Subject' }} <br>
                        <small>{{ $message->created_at->diffForHumans() }}</small>
                    </div>
                    <a href="{{ route('messages.show', $message) }}" class="btn btn-secondary btn-sm">
                        View
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>You haven't sent any messages yet.</p>
    @endif
</div>
@endsection
