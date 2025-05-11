@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Message Details</h2>

    <p><strong>From:</strong> {{ $message->sender->name }}</p>
    <p><strong>To:</strong> {{ $message->receiver->name }}</p>
    <p><strong>Subject:</strong> {{ $message->subject ?? 'No Subject' }}</p>
    <p><strong>Sent:</strong> {{ $message->created_at->toDayDateTimeString() }}</p>
    <hr>
    <p>{{ $message->body }}</p>

    <hr>
    <h4>Reply</h4>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $message->sender->id }}">
        <input type="hidden" name="subject" value="RE: {{ $message->subject }}">

        <div class="mb-3">
            <textarea name="body" class="form-control" rows="4" placeholder="Write your reply here..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Reply</button>
    </form>

    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
