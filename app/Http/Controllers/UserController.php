<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('position', 'childs', 'parent')->get();
        $positions = Position::all();
        return view('user.index', compact(['users', 'positions']));
    }

    public function store()
    {
        User::insert([
            'name' => request('name'),
            'email' => request('email'),
            'position_id' => request('position'),
            'employment_date' => request('employment_date'),
            'amount_of_wages' => request('amount_of_wages'),
            'director_id' => request('director'),
        ]);
        return back();
    }

    public function update($user)
    {
        User::where('id', $user)->update([
            'name' => request('name'),
            'email' => request('email'),
            'position_id' => request('position'),
            'employment_date' => request('employment_date'),
            'amount_of_wages' => request('amount_of_wages'),
            'director_id' => request('director'),
        ]);
        return back();
    }

    public function delete($user){
        User::where('id', $user)->delete();
        return back();
    }
}
