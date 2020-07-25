<?php

namespace App\Http\Controllers;

use App\Hobby;
use App\User;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users', $users);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Hobby $hobby)
    {
        //
    }

    public function edit(Hobby $hobby)
    {
        //
    }

    public function update(Request $request, Hobby $hobby)
    {
        //
    }

    public function destroy(Hobby $hobby)
    {
        //
    }
}
