<?php

use App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = ‘users’;

    protected $fillable = [
      ‘pseudo’,
      ‘email’,
      ‘mdp’
    ];


}
