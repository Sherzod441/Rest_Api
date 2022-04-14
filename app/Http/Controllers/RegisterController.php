<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
// use App\Models\User;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function addData(SubmitRequest $req){
       $validate = Validator::make($req->all(), $req->rules(), $req->messages());
         $users = UsersModel::query();
         $users->create($req->all());

        // $submit = new UsersModel();
        // $submit->name = $req->input('name');
        // $submit->surname = $req->input('surname');
        // $submit->email = $req->input('email');
        // $submit->password = $req->input('password');

        // $submit->save();

        return redirect()->route('login')->with('success', 'Siz ro\'yhatdan muvaffaqiyatli o\'tdangiz');
    }

    public function getData(Request $r){
        $get = Request::all();
        
    }
}
