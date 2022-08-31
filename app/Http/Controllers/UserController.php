<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request, $page = 1)
    {
        $paginate = 5;
        $skip = ($page * $paginate) - $paginate;
        $prevURL = $nextURL = '';

        if ($skip > 0) {
            $prevURL = $page - 1;
        }

        $users = User::latest()
                        ->skip($skip)
                        ->take($paginate)
                        ->get();

        if($users->count() > 0) {
            if($users->count() >= $paginate){
                $nextURL =$page + 1;
            }
            return view('users', compact('users', 'prevURL', 'nextURL'));
        }
            return redirect('/');
                        
    }
}
