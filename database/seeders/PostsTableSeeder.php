<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        $categories = Category::all();
        $categories->shift();

        $tags = Tag::all()->pluck('id');
        // $coll = [
        //     [
        //         'id'    => 1,
        //         'nome'  => 'ciao',
        //     ],
        //     [
        //         'id'    => 2,
        //         'nome'  => 'ciao',
        //     ],
        //     [
        //         'id'    => 3,
        //         'nome'  => 'ciao',
        //     ],
        // ];

        // $coll->pluck('id');

        // risultato: [
        //     1,
        //     2,
        //     3,
        // ]

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->words(rand(2, 10), true);  // Il mio titolo è questo
            $slug = Post::slugger($title);              // il-mio-titolo-questo
            $imageIndex = rand(0, 276);

            $post = Post::create([
                'user_id'       => $faker->randomElement($users)->id,
                'category_id'   => $faker->randomElement($categories)->id,
                'title'         => Str::ucfirst($title),
                'slug'          => $slug,
                'url_image'     => 'https://picsum.photos/id/' . rand(1, 270) . '/500/400',
                'image'         => $imageIndex ? 'uploads/picsum' . $imageIndex . '.jpg' : null,
                'content'       => $faker->paragraphs(rand(2, 20), true),
            ]);

            // associare il post ad un certo numero di tags
            $post->tags()->sync($faker->randomElements($tags, null));
        }
    }
}
