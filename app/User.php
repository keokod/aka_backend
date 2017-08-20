<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['pseudo','email','mdp'];
    protected $primaryKey = 'id_user';
}
?>
