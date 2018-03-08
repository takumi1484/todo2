<?php

use Illuminate\Database\Seeder;
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
       // Model::unguard();
       // $this->call('TodosTableSeeder');
       //factory(App\Task::class, 50)->create();
       //factoriesを利用した50個のデモデータ挿入



        Model::unguard();
        $this->call('SamplesTableSeeder');
        //SamplesTableSeederを利用したデモデータ挿入

        //Model::unguard();
        //$this->call('UsersTableSeeder');
        //SamplesTableSeederを利用したデモデータ挿入

    }
}