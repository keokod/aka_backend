<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompetenceController extends Controller{

	  public function index(){

	      $competence  = Competence::all();

	      return response()->json($competence);

	  }

	  public function createCompetence(Request $request){

	      $competence = Competence::create($request->all());

	      return response()->json($competence);

	  }

	      public function getCompetence($id){

	          $competence  = Competence::find($id);

	          return response()->json($competence);
	      }


	      public function deleteCompetence($id){
	          $competence  = Competence::find($id);
	          $competence->delete();

	          return response()->json('deleted');
	      }

	      public function updateCompetence(Request $request,$id){
	          $competence  = Competence::find($id);
	          $competence->nom_competence = $request->input('nom_competence');
	          $competence->save();

	          return response()->json($competence);
	      }

	  }

?>
