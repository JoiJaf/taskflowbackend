@extends('layouts.app')

@section('content')
    <h1>Editar Evento</h1>
    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="tag_id">Tag ID:</label>
            <input type="text" id="tag_id" name="tag_id" value="{{ $event->tag_id }}">
        </div>
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" value="{{ $event->course_id }}">
        </div>
        <div>
            <label for="user_specific_id">User Specific ID:</label>
            <input type="text" id="user_specific_id" name="user_specific_id" value="{{ $event->user_specific_id }}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $event->title }}">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">

        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $event->description }}</textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ $event->status }}">
        </div>
        <div>
            <label for="finish_date">Delivery date:</label>
            <input type="text" id="finish_date" name="finish_date">
        </div>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="{{ route('events.index') }}">Regresar</a>
@endsection