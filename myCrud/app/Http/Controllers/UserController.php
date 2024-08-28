<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // return $users;
        return view("users.listuser", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.addUserForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        // validation 
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string',
            'age' => 'required|numeric',
            'city' => 'required|string',
            'email' => 'required|email',
        ]);

        $users = new User();
        $users->id = $request->id;
        $users->name = $request->name;
        $users->age = $request->age;
        $users->city = $request->city;
        $users->email = $request->email;
        $users->save();
        return redirect()->route('users.index')->with("success","New User Added Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view("users.showuser", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view("users.updateuser" , compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
       public function update(Request $request, User $user)
    {
        // $user = User::find($id);
        // $user->id = $request->id;
        // $user->name = $request->name;
        // $user->age = $request->age;
        // $user->city = $request->city;
        // $user->email = $request->email;

        // validation 
     
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string',
            'age' => 'required|numeric',
            'city' => 'required|string',
            'email' => 'required|email',
        ]);
        
        $user->id = $request->id;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->save();


        // $user->name = $request->input('name');
        // $user->age = $request->input('age');
        // $user->city = $request->input('city');
        // $user->email = $request->input('email');
        // $user->save();
        return redirect()->route('users.index')->with('success' , 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success' , 'User Deleted Successfully');
    
    }
}
