<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $users = post::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|url',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'iduser' => 'required|string|unique:users',
            'ranks' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        post::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(post $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, post $user)
    {
        $request->validate([
            'image' => 'required|url',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'iduser' => 'required|string|unique:users,iduser,' . $user->id,
            'ranks' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(post $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
