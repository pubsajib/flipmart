<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => rand(1,10).'-'.str_random(16) .'-'. str_random(6) .'-'. str_random(6),
        'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
        'category' => rand(1,10),
        'slug' => rand(1,10).'-'.str_random(16),
        'image' => '',
        'regular_price' => 10.00,
        'sales_price' => 8.00,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
    ];
});
