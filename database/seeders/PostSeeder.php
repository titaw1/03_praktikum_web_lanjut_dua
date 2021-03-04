<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::insert([
            [
                'title' => 'BEST COLLECTION',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.',
                'featured_image' => '/img/img-3x2-01.jpg'
            ],
            [
                'title' => 'NEW DESIGN FOR YOUR WEBSITE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem at nisl malesuada, quis.',
                'featured_image' => '/img/img-3x2-02'
            ],
            [
                'title' => 'MOST UNIQUE IDEA EVER MADE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas.',
                'featured_image' => '/img/img-3x2-03.jpg'
            ],
            [
                'title' => 'SIMPLE TOUCH',
                'content' => 'Please tell your friends about TemplateMo website. Thank you.',
                'featured_image' => '/img/img-3x2-04.jpg'
            ]
        ]);
    }
}
