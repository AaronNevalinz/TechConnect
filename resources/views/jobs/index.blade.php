@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-medium text-gray-900">Your Job Postings</h3>
                    <a href="{{ route('jobs.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                        Create New Job
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-6">
                    @forelse($jobs as $job)
                        <div class="bg-white border rounded-lg shadow-sm p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $job->title }}</h4>
                                    <p class="text-gray-600 mb-4">{{ Str::limit($job->description, 200) }}</p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $job->type }}
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            {{ $job->location }}
                                        </span>
                                        @if($job->salary_range)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                {{ $job->salary_range }}
                                            </span>
                                        @endif
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $job->status === 'published' ? 'bg-green-100 text-green-800' : ($job->status === 'draft' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                            {{ ucfirst($job->status) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="{{ route('jobs.edit', $job) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('jobs.destroy', $job) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12">
                            <p class="text-gray-500">You haven't posted any jobs yet.</p>
                            <a href="{{ route('jobs.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                Post Your First Job
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
