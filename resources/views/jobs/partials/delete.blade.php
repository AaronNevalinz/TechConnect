<form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this job?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm">Delete</button>
</form>
