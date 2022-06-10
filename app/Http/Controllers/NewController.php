<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewModel;
use App\Http\Requests\NewRequest;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function welcome()
    {
        return view('welcome', ['new_models' => DB::table('new_models')->paginate(3)]);
    }

    public function index(NewRequest $req)
    {
        $users = new NewModel();
        $users -> name = $req -> input('name');
        $users -> email = $req -> input('email');
        $users -> text = $req -> input('text');
        $users->save();

        return redirect()->route('home');
    }
}
