<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Company;

class Users extends Controller
{
    function logIn(Request $req){
        $req->validate([
            'email' => 'required | max:10',
            'password' => 'required | min:5'
        ]); 
        return $req->input();
    }

    function signUp(Request $req){
        $data = $req->all();
        $data['is_admin'] = 0;
        User::create($data);
        // return('signup successfull');
        return redirect("home");
    }

    function updateUser(Request $req){
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect("dataset");
    }

    function showUpdate($id){
        $data = User::find($id);
        return view("updateUser", ['data'=>$data]);
    }

    function deleteUser($id){
        $data = User::find($id);
        $data->delete();
        return redirect("dataset");
    }

    function addUser(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect("addUser");
    }

    function testData(){
        $data= User::paginate(5);
        return view("user", ['users'=>$data]);
    }
   
    public function index($user){
        echo $user;
        echo ", Hello from Users controller";
        echo "\n";
        return ['name' => "ABC", 'age' => 40];
    }

    public function loadView($user){
        $data=['ff', 'francis', 'ching'];
        return view("user", 
        ['user' => $user, 'users'=>$data]);
    }

    function OneToOne(){
        return User::find(2)->getOneCompany;
    }

    function OneToMany(){
        return User::find(2)->getManyCompany;
    }
}
