<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;



use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function my_home()
    {
        $data = Food::all();
        
        return view('home.index', compact('data'));
    }


    public function index()
    {
        if (Auth::id()) 
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user')
            {
                $data = Food::all();

                
                return view('home.index', compact('data'));
            }

            else
            {
                return view('admin.index');
            }
        }
}

    public function add_cart(Request $request, $id)
    {
        $food = Food::find($id);

        $user = User::find(Auth::id());

        $user->foods()->attach($food);

        return redirect()->back();
    }
}