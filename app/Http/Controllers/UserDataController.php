<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index(Request $request)
    {
        $query = UserData::query();
        $search = $request->input('q');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('u_idno', 'like', "%{$search}%")
                  ->orWhere('u_name', 'like', "%{$search}%")
                  ->orWhere('u_company', 'like', "%{$search}%");
            });
        }
        $users = $query->paginate(10);
        return view('userdata.index', ['users' => $users, 'search' => $search]);
    }
}
