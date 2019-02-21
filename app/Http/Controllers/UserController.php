<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        return response()->json(
            [
                'status' => 'success',
                'users' => $users->toArray(),
                'login' => Auth::user()->name
            ], 200);
    }
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }

}
