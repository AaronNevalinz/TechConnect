@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-medium text-gray-900">Your Startups</h3>
                    <a href="{{ route('startups.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                        Create New Startup
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($startups as $startup)
                        <div class="bg-white border rounded-lg shadow-sm p-6">
                            @if($startup->logo)
                                <div class="mb-4">
                                    <img src="{{ Storage::url($startup->logo) }}" 
                                         alt="{{ $startup->name }} logo" 
                                         class="w-32 h-32 object-cover rounded-lg mx-auto">
                                </div>
                            @endif
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $startup->name }}</h4>
                            <p class="text-gray-600 mb-4">{{ Str::limit($startup->description, 100) }}</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $startup->industry }}
                                </span>
                                <div class="flex space-x-2">
                                    <a href="{{ route('startups.edit', $startup) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('startups.destroy', $startup) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this startup?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12">
                            <p class="text-gray-500">You haven't created any startups yet.</p>
                            <a href="{{ route('startups.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Create Your First Startup
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection 