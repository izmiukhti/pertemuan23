<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('partials.team');
    }
    public function getUsers()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return DataTables::of($users)->make(true);
    }
}
