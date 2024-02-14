<div class="card mb-3">
    <div class="card-header">
        Task ID №{{ $task->id }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $task->title }}</h5>
        <p class="card-text">Discription: {{ $task->discription ?? "None" }}</p>
        <p class="card-text">Created At: {{ $task->created_at ?? "None" }}</p>
        <p class="card-text">Updated At: {{ $task->updated_at ?? "None" }}</p>
        <a href="{{ route("tasks.edit", $task) }}" class="btn btn-primary">Edit</a>

        <x-forms.form :action="route('tasks.delete', $task)" method="DELETE">
            <button class="btn btn-danger">Delete</button>
        </x-forms.form>
    </div>
</div>