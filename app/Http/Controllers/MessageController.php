<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // Show inbox
    public function index()
    {
        $messages = Message::where('receiver_id', Auth::id())->latest()->get();
        return view('messages.inbox', compact('messages'));
    }

    // Show sent messages
    public function sent()
    {
        $messages = Message::where('sender_id', Auth::id())->latest()->get();
        return view('messages.sent', compact('messages'));
    }

    // Show form to create new message
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get(); // exclude self
        return view('messages.create', compact('users'));
    }

    // Store new message
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'subject' => 'nullable|string|max:255',
            'body' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'subject' => $request->subject,
            'body' => $request->body,
        ]);

        return redirect()->route('messages.sent')->with('success', 'Message sent successfully.');
    }

    // View message details
    public function show(Message $message)
    {
        // Allow viewing only if you're the sender or receiver
        if (Auth::id() !== $message->sender_id && Auth::id() !== $message->receiver_id) {
            abort(403);
        }

        // Mark as read if you're the receiver
        if (Auth::id() === $message->receiver_id && !$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('messages.show', compact('message'));
    }
    
}
