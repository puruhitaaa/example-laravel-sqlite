@extends('layouts.app')

@section('content')
<div class="mb-4">
    <a href="{{ route('notes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create Note</a>
</div>
@if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2 px-4">Title</th>
            <th class="py-2 px-4">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr>
            <td class="border px-4 py-2">{{ $note->title }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('notes.show', $note->id) }}" class="text-blue-600">View</a>
                <a href="{{ route('notes.edit', $note->id) }}" class="text-green-600 ml-2">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
