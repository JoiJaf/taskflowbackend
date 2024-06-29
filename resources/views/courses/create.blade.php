@extends('courses.layout')
 
@section('content')
    <div class="font-[Montserrat]">
        <div class="mt-5 text-center">
             <div>
                <a class="inline-block text-black bg-[#f8f7f2] border-[0.1rem] border-black hover:bg-black hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-4" href="{{ route('courses.index') }}"> Back</a>
            </div>
            <div>
                <h2 class="mb-2 mt-2 text-4xl font-medium leading-tight text-black">Add New Course</h2>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="text-center text-[#f68051]">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form class="max-w-[360px] mx-auto" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div>
            <div class="mt-2 mb-2">
                <div>
                    <label for="courseName" class="block mb-2 text-sm font-medium text-black">Course:</label>
                    <input type="text" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="courseName" placeholder="Course Name" >
                </div>
            </div>
            <div class="mt-2 mb-2">
                <div>
                    <label for="teacherName" class="block mb-2 text-sm font-medium text-black">Teacher:</label>
                    <input type="text" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="teacherName" placeholder="Teacher Name" >
                </div>
            </div>
            <div class="mt-2 mb-2">
                <div>
                <label for="category" class="block mb-2 text-sm font-medium text-black">Category:</label>
                <select id="category" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="category">
                     <option value="1">Career</option>
                     <option value="2">Course</option>
                     <option value="3">University</option>
                     <option value="4">Student</option>
                 </select></div>
            </div>
            <div>
                <button type="submit" class="inline-block text-white bg-black hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-2 me-2 mb-4 w-[6rem]">Submit</button>
            </div>
        </div>
    </form>
@endsection