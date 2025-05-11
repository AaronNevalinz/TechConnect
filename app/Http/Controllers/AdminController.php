<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $role = Auth::user()->role;

        // Redirect to respective dashboard based on user role
        switch ($role) {
            case 'professional':
                return inertia('professional/Dashboard');
            case 'admin':
                return view('admin.dashboard');
            case 'developer':
                return view('developer.dashboard');
            case 'entrepreneur':
                return view('entrepreneur.dashboard');
            case 'investor':
                return view('investor.dashboard');
            default:
                return redirect()->back();
        }
    }
}
