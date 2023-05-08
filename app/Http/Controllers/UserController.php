<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', [
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('user.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, User $user)

    {

        $user = User::create($request->all());
        
        Mail::to('mateo.ceballos14714@ucaldas.edu.co')
       ->send(new CreateUser($user));
       return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.details', [
            'user'=> $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        
        $user->update();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
