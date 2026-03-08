<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index() {

    $data = [
    'nama' => 'Pelanggan Pertama',
    ];

    UserModel::where('username', 'customer-1')->update($data); // update data di tabel m_user

    $user = UserModel::all();
    return view('user', ['data' => $user]);
}
}
