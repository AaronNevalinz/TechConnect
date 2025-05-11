@extends('layouts.app')

@section('content')
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Entrepreneur Dashboard</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- My Startups Card -->
                    <div class="bg-white border rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">My Startups</h3>
                        <p class="text-gray-600 mb-4">Manage your startup portfolio and track their progress.</p>
                        <div class="space-y-2">
                            <a href="{{ route('startups.create') }}" class="block w-full text-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Create New Startup
                            </a>
                            <a href="{{ route('startups.index') }}" class="block w-full text-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50">
                                View All Startups
                            </a>
                        </div>
                    </div>

                    <!-- Funding Rounds Card -->
                    <div class="bg-white border rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Funding Rounds</h3>
                        <p class="text-gray-600 mb-4">Track and manage your startup's funding rounds.</p>
                        <div class="space-y-2">
                            <a href="{{ route('funding-rounds.create') }}" class="block w-full text-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Create Funding Round
                            </a>
                            <a href="{{ route('funding-rounds.index') }}" class="block w-full text-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50">
                                View All Rounds
                            </a>
                        </div>
                    </div>

                    <!-- Profile Card -->
                    <div class="bg-white border rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Profile</h3>
                        <p class="text-gray-600 mb-4">Manage your entrepreneur profile and settings.</p>
                        <div class="space-y-2">
                            <a href="{{ route('profile.show') }}" class="block w-full text-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection 