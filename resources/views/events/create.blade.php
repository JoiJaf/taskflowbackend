@extends('layouts.app')

@section('content')
    <h1>Crear Evento</h1>
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="tag_id">Tag ID:</label>
            <input type="text" id="tag_id" name="tag_id">
        </div>
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id">
        </div>
        <div>
            <label for="user_specific_id">User Specific ID:</label>
            <input type="text" id="user_specific_id" name="user_specific_id">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status">
        </div>
        <div>
            <label for="finish_date">Delivery date:</label>
            <input type="text" id="finish_date" name="finish_date">
        </div>
        <button type="submit">Crear</button>
    </form>
    <br>
    <a href="{{ route('events.index') }}">Regresar</a>
@endsection