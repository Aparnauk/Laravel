<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        // $a = 10;
        // $b = 20;
        // $c = $a + $b;
        // return $c;

        $colors=['red','yellow','pink','blue','green'];


        $name = 'Earth';
        $newName = strtoupper($name);
        $age =30;
        $record = ['red'];
        $status =2;

        // read
        // ------------------------------------

        $users = User::all(); //select * from users


        // to find one user
        $user = User::find(18);
        //select * from users where user_id = id(in queries they call only id) = 18

        // OR
        // $user = User::where('user_id','=',18)->get();
        // instead of = ('user_id',18) is enough
        // $user = User::where('email','gaylord.jacobi@example.com')->first();

        // OR
        // $user = User::where('user_id','=',18)->first();


        // to find two persons
        // $users = User::whereIn('user_id',[58,18])->get();

        // to find status
        // $users = User::where('status',1)->count();
        $users = User::where('status',1)->get();

        // $users = User::active()->get();

        // name in ascending order
        // $users = User::active()->orderBy('name','ASC')->get();

        // name in descending order
        // $users = User::active()->orderBy('name','DESC')->get();

        // take latest data to first
        // $users = User::active()->latest()->get();

        // get first created data/older data order
        // $users = User::active()->oldest()->get();

        // get latest 10 data to last
        // $users = User::active()->oldest()->limit(10)->get();

        // to delete 5 datas from the list
        // $users = User::active()->oldest()->limit(10)->skip(5)->get();

        // to find more than one users name
        // return $users->name;

        // to find all users
        // return $users;

        // to find user date of birth
        // return $user->date_of_birth;

        // return $users;

        // to change format of date of birth
        // return $user->created_at->format('d-M-Y');


        // to find name of the user
        // return $user->name;

// 'c'---------------------------------|V
//
        return view('welcome',compact('newName','age','record','status','colors','users'));
    }

    public function create(){
        return view('users.create');
    }

    public function save(){

        $name = request('name');
        $email = request('email');
        $dob = request('date_of_birth');
        $status = request('status');


        User::create([
           
            'name'=>$name,
            'email'=>$email,
            'date_of_birth'=>$dob,
            'status'=>$status
        ]);

        return "1 Row Inserted";
    }

    // public function aboutController(){
    //     return view('about-controller');
    // }

    // public function contactController(){
    //     return view('contact-controller');
    // }



}
