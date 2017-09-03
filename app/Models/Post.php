<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = ['sujet','id_user','resolu','description','date_post'];
    protected $primaryKey = 'id_post';
}


//id_post INT(10) id_user INT(10) sujet VARCHAR(255) resolu TINYINT(1) description VARCHAR(255) date_post TIMESTAMP 


?>

