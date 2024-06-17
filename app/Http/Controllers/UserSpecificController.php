<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserSpecific;


class UserSpecificController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = UserSpecific::select(
            'users_specific.email',
            'users_specific.user_name',
            'users_specific.password',
            'users_levels.user_level_name as user_level_name'
        )
        ->join('users_levels', 'user_specific.user_level_id', '=', 'users_levels.id')
        ->where('user_specific.id', $id)
        ->orderBy('scheduled_at', 'asc')
        ->paginate(10);
        //->get();
        
        $total = count(UserSpecific::all()->where('status_events_id', 1));
        return view('', compact('users', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = UserSpecific::all();

        return view('');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        UserSpecific::create([
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => $request->password,
            'user_level_id' => $request->user_level_id
        ]);  
    
        return redirect()->route('')->with('success','User registered successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = UserSpecific::select(
            'users_specific.email',
            'users_specific.user_name',
            'users_specific.password',
            'users_levels.user_level_name as user_level_name'
        )
        ->join('users_levels', 'user_specific.user_level_id', '=', 'users_levels.id')
        ->where('user_specific.id', $id)
        ->get();

        return view('', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = UserSpecific::find($id);
       
        
        return view('', compact(''));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = UserSpecific::find($id);

        $user->update([
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => $request->password,
            'user_level_id' => $request->user_level_id
        ]);  
    
        return redirect()->route('')->with('success','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = UserSpecific::find($id);
        $user->delete();

        return redirect()->route('')->with('success','user deleted successfully.');
    }
}
