<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


  public function index(){

      $user  = User::all();

      return response()->json($user);


  }

  public function createUser(Request $request){

      $user = User::create($request->all());

      return response()->json($user);

  }

      public function getUser($id){

          $user  = User::find($id);

          return response()->json($user);
      }


      public function deleteUser($id){
          $user  = User::find($id);
          $user->delete();

          return response()->json('deleted');
      }

      public function updateUser(Request $request,$id){
          $user  = User::find($id);
          $user->pseudo = $request->input('pseudo');
          $user->email = $request->input('email');
          $user->mdp = $request->input('mdp');
          $user->save();

          return response()->json($user);
      }

  }
