<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'pseudo'=>str_random(10),
          'email'=>str_random(10).'@it-akademy.fr',
          'mdp'=>str_random(10),
        ]);

        $last_id  = DB::getPdo()->lastInsertId();
        
        //ajouter un poste bidon
        DB::table('posts')->insert([
          'id_user'=>$last_id,
          'sujet'=>"pourquoi ".str_random(1),
          'description'=>str_random(100),
        ]);
    }
}
