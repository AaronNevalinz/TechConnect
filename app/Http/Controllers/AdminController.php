<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role = Auth()->user()->role;
            // Redirect to respective dashboard based on user role. For example:

            // professional dashboard

            if($role == "professional"){
                return inertia('professional/Dashboard');
            }

            // admin dashboard

            else if($role == "admin"){
                return view('admin.dashboard');
            }

            // developer dashboard

            else if($role == "developer"){
                return view('developer.dashboard');
            }

            // entreprenuer dashboard

            else if($role == "entrepreneur"){
                return view('entrepreneur.dashboard');
            }

            // investor dashboard

            else if($role == "investor"){
                return view('investor.dashboard');
            }

            // fall back to the home

            else{
                return redirect()->back();
            }
        }
    }
}
