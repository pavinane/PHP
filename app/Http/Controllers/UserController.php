<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index ()
    // public function index ($name)  /*$-passing the parameter*/
    {

        
        
    /*DB fetch in Sql */  
    // DB::insert('insert into users (name,email,password) values (?,?, ?)',
    //  ['nane', 'pavithranathan@gmail.com','nane97']);     
        
    /*DB in showing web page*/
    //   $users= DB::select('select * from users');         
    //     return $users;

    /* update the DB */
    // DB::update ('update users set name = ? where id =3',['pavinane']); 
      
    /* delete for DB*/
    // DB::delete('delete from users where id = 3');
    // $users= DB::select('select * from users'); 
    //  return $users;


        
        
    // return view ('home');

    /*  using controllers  in web.php*/      
    // return 'hi from user controler, Name :' .$name;
        $name = 'pavinane';
        $user =array(
            "name" => "pavithranath Karmegan",
            "email" => "pavimega77@gmail.com",
            "phone" => "1234567890",

        );
        return view('home',compact('name','user'));

    
    }
}
