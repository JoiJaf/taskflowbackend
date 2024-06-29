@extends('courses.layout')

@section('content')
    <div class="font-[Montserrat] text-center">
        <div class="mt-5"> 
            <div>
                <h1 class="mb-0 mt-0 text-4xl font-bold leading-tight text-[#1e1e1e]">Courses</h1>
            </div>
            <div>
                <h2 class="mb-2 mt-0 text-lg font-medium leading-tight text-[#747473]">Total:<span class="text-sm">{{ $total }}</span></h2>
            </div>
        </div>
        <div>
            <a class="inline-block text-black bg-[#f8f7f2] border-[0.1rem] border-black hover:bg-black hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2" href="{{ route('courses.create') }}">Create New Course</a>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="p-4 mb-4 text-sm text-white rounded-lg bg-[#f68051]">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="min-w-full text-center text-sm font-light text-surface dark:text-black font-[Lora] mb-5 border-[0.1rem] border-black">
        <thead class="border-b border-neutral-200 bg-[#ebe3dc] font-medium dark:border-white/10 dark:text-neutral-800">
            <tr>
                <th scope="col" class="px-6 py-3">Course</th>
                <th scope="col" class="px-6 py-3">Teacher</th>
                <th scope="col" class="px-6 py-3">Category</th>
                <th scope="col" class="px-6 py-3" width="150px">Action</th>
            </tr>
        </thead>
        <tbody class="bg-[#faf8f8]">
            @foreach ($courses as $course)
            <tr class="border-[0.1rem] border-black">
                <td class="font-medium px-6 py-3">{{ $course->course_name }}</td>
                <td class="font-medium px-6 py-3">{{ $course->teacher }}</td>
                <td class="font-medium px-6 py-3">{{ $course->category_name }}</td>
                <td>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
        
                        <a class="inline-block mx-6" href="{{ route('courses.edit', $course->id) }}">
                            <button type="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </button>
                        </a>
    
                        @csrf
                        @method('DELETE')
        
                        <button class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-white font-[Monserrat] mb-5">
        {{ $courses->onEachSide(5) }}
    </div>
@endsection
