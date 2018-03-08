<?php

use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tasks')->truncate();

        DB::table('tasks')->insert([
            [
                'id'      => '1',
                'name'       => 'testdata id1 isdone0',
                'is_done'   => '0',
                'created_at' => '2000-01-1 00:00:00',
                'updated_at' => '2000-01-1 00:00:00',
            ],
            [
                'id'      => '2',
                'name'       => 'testdata id2 isdone0',
                'is_done'   => '0',
                'created_at' => '2000-01-1 00:00:00',
                'updated_at' => '2000-01-1 00:00:00',
            ],
            [
                'id'      => '3',
                'name'       => 'testdata id3 isdone1',
                'is_done'   => '1',
                'created_at' => '2000-01-1 00:00:00',
                'updated_at' => '2000-01-1 00:00:00',
            ],
        ]);
    }
}