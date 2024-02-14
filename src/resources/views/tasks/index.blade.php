@extends('layouts.main')

@section('content')
    @section('title', "Tasks")

    <x-forms.form :action="route('tasks.store')" method="POST">
        <x-forms.input name="title" type="text" :value="old('title')" for="title">
            <x-slot name="label">
                Title
            </x-slot>
            @if ($errors->has("title"))
                <x-forms.error target="title"/>
            @endif
        </x-forms.input>
        <x-forms.input name="discription" type="text" :value="old('discription')" for="discription">
            <x-slot name="label">
                Discription
            </x-slot>
            @if ($errors->has("discription"))
                <x-forms.error target="discription"/>
            @endif
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Add New Task</button>
        @if ($errors->has("store"))
            <x-forms.error target="store"/>
        @endif
    </x-forms.form>
    <hr>
    <x-forms.form :action="route('tasks.store')" method="GET">
        <x-forms.input name="search" type="text" :value="$filters['search'] ?? ''" for="title">
            <x-slot name="label">
                Search
            </x-slot>
        </x-forms.input>

        <x-forms.checkbox name="date" value="new" for="new" :checked="$filters['date'] === 'new'">
            New Date
        </x-forms.checkbox>
        <x-forms.checkbox name="date" value="old" for="old" :checked="$filters['date'] === 'old'">
            Old Date
        </x-forms.checkbox>

        <button type="submit" class="btn btn-primary mt-3">Search</button>
    </x-forms.form>
    <hr>

    @forelse ($tasks as $task)
        <x-tasks.task-card :task="$task"/>
    @empty
        <h2 class="text-center mt-3">No Tasks</h2>
    @endforelse
    {{ $tasks->withQueryString()->links() }}
@endsection