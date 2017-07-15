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

    public function getListeSujet(){

        $sql = "SELECT post.post_id as id, post.sujet as sujet, user.pseudo as pseudo
        FROM  `post` 
        LEFT JOIN `user`
        ON post.user_id = user.user_id";

        $results = app('db')->select($sql);
        return json_encode($results);     

    }

    public function getTopic($id){

        $sql = "SELECT post.post_id as id_post, post.user_id as id_user, post.sujet as sujet,
        post.resolu as resolu, post.description as description, post.date_post,
        reponse.reponse_id as id_reponse, reponse.reponse, reponse.user_id as id_user_reponse , 
        reponse.date_reponse as date_reponse,user.pseudo as pseudo
        FROM `post` 
        LEFT JOIN `reponse`
        ON  post.post_id = reponse.post_id
        LEFT JOIN `user`
        ON reponse.user_id = user.user_id
        WHERE post.post_id = $id";

        $results = app('db')->select($sql);
        return json_encode($results);  
    }

}