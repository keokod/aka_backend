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
        $sql= "SELECT user.user_id as user_id, user.pseudo as pseudo, user.avatar as avatar, competences.nom as competence
        FROM user
        LEFT JOIN userCompetence
        ON user.user_id = userCompetence.user_id
        LEFT JOIN competences
        ON userCompetence.user_id = competences.competence_id
        WHERE user.user_id = $id";

        $results = app('db')->select($sql);
        return json_encode($results);
    }

}