<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Http\Requests\SubmitRequest;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    
    public function register(SubmitRequest $request){
       $validate = Validator::make($request->all(), $request->rules(), $request->messages());
         $users = UsersModel::query();
         $users->create($request->all());
        return redirect()->route('login')->with('success', 'Siz ro\'yhatdan muvaffaqiyatli o\'tdangiz');
    }
    
    
    public function postLogin(Request $request){
        $users = UsersModel::query();
        $user = $users->where(['email' => $request->email, 'password' => $request->password])->get();
    
        if (!$user->isEmpty()) {
            $request->session()->put('user', $user[0]);
            return redirect()->route('adminpage');
        } else {
            return redirect()->route('login');
        }
    
    }

    public function addProduct(Request $request){
        $submit = new ProductsModel();
        $submit->product_name = $request->input('product_name');
        $submit->product_price = $request->input('product_price');
        $submit->product_how_many = $request->input('product_how_many');

        $submit->save();

        return redirect()->route('adminpage')->with('success', 'Siz ro\'yhatdan muvaffaqiyatli o\'tdangiz');
    }

    public function getData(){

        $data = ProductsModel::all();
        return view('pages.products', ['data' => $data]);
      
    }

    public function updateData(){

        $data = ProductsModel::all();
        return view('admin.updateProduct', ['data' => $data]);
    }

    public function index()
    {
        return view('pages.login');
    }  



    public function dashboard()
    {
            
    }

    public function logout() {
        session()->forget('user');

        return redirect()->route('login');
    }
 


}
