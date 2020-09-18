<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index ()
    {
        
    // DB::insert('insert into users (name,email,password) values (?,?, ?)',
    //  ['nane', 'pavithranathan@gmail.com','nane97']);     DB fetch in Sql 
        
    //   $users= DB::select('select * from users');         /*DB in showing web page*/
    //     return $users;

    DB::update ('update users set name = ? where id =3',['pavinane']);  /* update the DB */
        
    $users= DB::select('select * from users'); 
     return $users;
        
        
        return view ('home');
    }
}
