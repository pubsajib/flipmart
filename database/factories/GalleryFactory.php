<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
	$status = ['active','inactive','trash'];
    return [
        'product_id' => rand(1,50),
        'image' => $faker->imageUrl(640, 480),
        // 'image' => $faker->image(public_path('/images/products'), 800, 600),
        'status' => $status[rand(0,2)]
    ];
});
