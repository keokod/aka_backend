<?php

namespace App\Http\Controllers;
use App\Models\Statistique;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{

  public function index(){

      $statistique  = Statistique::all();

      return response()->json($statistique);

  }

  public function createStatistique(Request $request){

      $statistique = Statistique::create($request->all());

      return response()->json($statistique);

  }

      public function getStatistique($id){

          $statistique  = Statistique::find($id);

          return response()->json($statistique);
      }


      public function deleteStatistique($id){
          $statistique  = Statistique::find($id);
          $statistique->delete();

          return response()->json('deleted');
      }
/*
      public function updateUser(Request $request,$id){
          $user  = User::find($id);
          $user->pseudo = $request->input('pseudo');
          $user->email = $request->input('email');
          $user->mdp = $request->input('mdp');
          $user->save();

          return response()->json($user);
      }
*/
  }
