@extends('layouts.main')

@section('content')
    @section('title', $task->title)
    <x-forms.form :action="route('tasks.update', $task)" method="PATCH">
        <x-forms.input name="title" type="text" :value="old('title') ?? $task->title" for="title">
            <x-slot name="label">
                Title
            </x-slot>
            @if ($errors->has("title"))
                <x-forms.error target="title"/>
            @endif
        </x-forms.input>
        <x-forms.input name="discription" type="text" :value="old('discription') ?? $task->discription" for="discription">
            <x-slot name="label">
                Discription
            </x-slot>
            @if ($errors->has("discription"))
                <x-forms.error target="discription"/>
            @endif
        </x-forms.input>

        <button type="submit" class="btn btn-primary">Update</button>
    </x-forms.form>
@endsection