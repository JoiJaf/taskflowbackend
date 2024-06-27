@extends('users.layout')
 
@section('content')
    <div class="font-[Montserrat]">
        <div class="mt-5 text-center">
             <div>
                <a class="inline-block text-black bg-[#f8f7f2] border-[0.1rem] border-black hover:bg-black hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-4" href="{{ route('users.index') }}"> Back</a>
            </div>
            <div>
                <h2 class="mb-2 mt-2 text-4xl font-medium leading-tight text-black">Add New User</h2>
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
    
    <form class="max-w-[360px] mx-auto" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div>
            <div class="mt-2 mb-2">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-black">Username:</label>
                    <input type="text" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="username" placeholder="Username" >
                </div>
            </div>
            <div class="mt-2 mb-2">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-black">Email:</label>
                    <input type="email" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="email" placeholder="Email" >
                </div>
            </div>
            <div class="mt-2 mb-2">
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-black">Password:</label>
                    <input type="password" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="password" placeholder="Password" >
                </div>
            </div>
            <div class="mt-2 mb-2">
                <div>
                <label for="userLevel" class="block mb-2 text-sm font-medium text-black">User Level:</label>
                <select id="userLevel" class="bg-[#faf8f8] border-[0.1rem] border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" name="userLevel">
                     <option value="1">User</option>
                    <option value="2">Admin</option>
                 </select></div>
            </div>
            <div>
                <button type="submit" class="inline-block text-white bg-black hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-2 me-2 mb-4 w-[6rem]">Submit</button>
            </div>
        </div>
    </form>
@endsection