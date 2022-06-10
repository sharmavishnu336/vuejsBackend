<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;



class UserController extends Controller
{

    public function getList()
    {
        $user = User::all();
        return response()->json([
            'message' => 'User get successfully',
            'user' => $user
        ], 201);

    }
    
}
