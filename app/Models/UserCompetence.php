<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usercompetence extends Model {
    protected $fillable = ['id_competence','id_user'];
    protected $primaryKey = 'id_user_competence';

    /**
       * Define an inverse one-to-many relationship with App\competence.
       */
      public function post(){
          return $this->belongsTo('App\Competence');
      }
      public function user(){
          return $this->belongsTo('App\User');
      }
}
?>
