@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Send Message</h2>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="receiver_id" class="form-label">To:</label>
            <select name="receiver_id" id="receiver_id" class="form-select" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->role }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject:</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Message:</label>
            <textarea name="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
@endsection
