<?php

namespace App\Http\Controllers;

use App\Models\UserCompetence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCompetenceController extends Controller{

	  public function index(){

	      $usercompetence  = usercompetence::all();

	      return response()->json($usercompetence);

	  }

	  public function createUserCompetence(Request $request){

	      $usercompetence = usercompetence::create($request->all());

	      return response()->json($usercompetence);

	  }

	      public function getUserCompetence($id){

	          $usercompetence  = usercompetence::find($id);

	          return response()->json($usercompetence);
	      }


	      public function deleteUserCompetence($id){
	          $usercompetence  = usercompetence::find($id);
	          $usercompetence->delete();

	          return response()->json('deleted');
	      }
/*
	      public function updateCompetence(Request $request,$id){
	          $usercompetence  = usercompetence::find($id);
	          $usercompetence->nom_competence = $request->input('nom_competence');
	          $usercompetence->save();

	          return response()->json($competence);
	      }
*/
	  }

?>
