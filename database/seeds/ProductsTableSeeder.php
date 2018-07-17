<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(4) .' Lorem ipsum dolor sit amet.',
                'body' => str_random(5) .' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, delectus ad blanditiis accusamus aut distinctio eligendi ut illo consectetur. Dignissimos omnis sunt perspiciatis quam quod, cum suscipit. Sequi, consequuntur, ea.',
                'category' => rand(1,10),
                'image' => '',
                'regular_price' => 10.00,
                'sales_price' => 8.00,
                'gallery' => rand(1,5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
