<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::with('position')->where('director_id','=', 0)->get();
        $allUsers = User::pluck('name','id')->all();
        $count = User::count();
        return view('homepage.index', compact(['count', 'users', 'allUsers']));
    }
}
