@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">{{ $note->title }}</h2>
    <p class="mb-4">{{ $note->body }}</p>
    <div class="flex space-x-2">
        <a href="{{ route('notes.edit', $note->id) }}" class="bg-green-600 text-white px-4 py-2 rounded">Edit</a>
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Delete</button>
        </form>
        <a href="{{ route('notes.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Back</a>
    </div>
</div>
@endsection
