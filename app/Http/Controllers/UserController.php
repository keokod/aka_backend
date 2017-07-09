<?php

namespace App\Http\Controllers; //pourquoi les namespaces on une majuscule et que le dossier sont en minuscule

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
    }

    public function getUser()
    {
        $sql="select * from user";
        $results = app('db')->select($sql);


        return json_encode($results);
    }

    public function getMembre($id)
    {
        $sql="select * from user where user_id= $id";
        //echo $sql;
        $results = app('db')->select($sql);
        
        return json_encode($results);
    }
    //
}