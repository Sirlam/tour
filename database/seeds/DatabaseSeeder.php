<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //$this->call('UsersTableSeeder');
        //$this->call('PlacesTableSeeder');
        $this->call('CommentsTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
