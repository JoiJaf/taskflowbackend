@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-4 bg-white shadow-md rounded-lg">
    <h1 class="text-3xl font-bold mb-6">Lista de Eventos</h1>
    @if ($events->isEmpty())
        <p class="text-gray-600">No hay eventos disponibles.</p>
    @else
    <a href="{{ route('events.create') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
        Crear Nuevo Evento
    </a>
        <ul class="divide-y divide-gray-200">
            @foreach ($events as $event)
                <li class="py-4 flex justify-between items-center">
                    <a href="{{ route('events.show', $event->id) }}" class="text-xl font-semibold text-blue-600 hover:underline">
                        {{ $event->title }}
                    </a>
                    <span class="text-gray-500">{{ \Carbon\Carbon::parse($event->finish_date)->format('d/m/Y') }}</span>
                </li>
            @endforeach
        </ul>
    @endif
    
</div>
@endsection