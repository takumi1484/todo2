<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('todos')->truncate();

        DB::table('todos')->insert([
            [
                'tag'         => 'red',
                'body'        => 'TestA body tesaagdgat.',
                'username'   => 'userA',
                'created_at' => '2016-08-12 14:00:00',
            ],
            [
                'tag'         => 'blue',
                'body'       => 'TestB body testfadaadg.',
                'username'   => 'userB',
                'created_at' => '2016-08-12 14:03:00',
            ],
        ]);
    }
}