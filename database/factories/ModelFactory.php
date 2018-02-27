<?php
/**
 * Created by PhpStorm.
 * User: kasum
 * Date: 2018/02/27
 * Time: 5:08
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'is_done' => mt_rand(0, 1),
    ];
});