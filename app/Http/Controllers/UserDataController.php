<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index(Request $request)
    {
        $query = UserData::query();

        $account = $request->input('account');
        $name = $request->input('name');

        if ($account) {
            $query->where('u_idno', 'like', "%{$account}%");
        }

        if ($name) {
            $query->where('u_name', 'like', "%{$name}%");
        }

        $users = $query->paginate(10)->appends($request->only('account', 'name'));

        return view('userdata.index', [
            'users' => $users,
            'account' => $account,
            'name' => $name,
        ]);
    }

    public function create()
    {
        return view('userdata.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'u_idno' => 'required|string|max:15|unique:userdatas,u_idno',
            'u_name' => 'required|string|max:20',
            'u_passwd' => 'required|string|max:15',
            'u_company' => 'nullable|string',
            'u_status' => 'required|string|max:5',
        ]);

        UserData::create($validated);

        return redirect()->route('userdata.index');
    }
}
