@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Inbox</h2>

    @if ($messages->count())
        <ul class="list-group">
            @foreach ($messages as $message)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <strong>From:</strong> {{ $message->sender->name }} <br>
                    <strong>Subject:</strong> {{ $message->subject ?? 'No Subject' }}
                    @if (!$message->is_read)
                        <span class="badge bg-warning text-dark">New</span>
                    @endif
                    <br>
                    <small>{{ $message->created_at->diffForHumans() }}</small>
                </div>
                <a href="{{ route('messages.show', $message) }}" class="btn btn-primary btn-sm">
                    View
                </a>
            </li>

            @endforeach
        </ul>
    @else
        <p>No messages in your inbox.</p>
    @endif
</div>
@endsection
