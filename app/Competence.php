<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model {
    protected $fillable = ['nom_competence'];
    protected $primaryKey = 'id_competence';
}
?>
