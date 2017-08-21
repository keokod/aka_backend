<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistique extends Model {
    protected $fillable = ['id_user','nb_reponse','nb_question','nb_resolu'];
    protected $primaryKey = 'id_stat';

    /**
       * Define an inverse one-to-many relationship with App\user.
       */

      public function user(){
          return $this->belongsTo('App\User');
      }
}
?>
