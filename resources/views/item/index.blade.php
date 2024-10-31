<!-- resources/views/items/index.blade.php -->

@extends('layouts.user_type.auth')

@section('content')
    <h1>Items</h1>
    <a href="{{ route('items.create') }}">Create New Item</a>

    @foreach($items as $item)
        <div>
            <h2>{{ $item->name }}</h2>
            <p>{{ $item->description }}</p>
            <a href="{{ route('items.show', $item->id) }}">View</a>
            <a href="{{ route('items.edit', $item->id) }}">Edit</a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
