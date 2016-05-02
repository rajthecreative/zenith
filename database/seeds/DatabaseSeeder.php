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
        Model::unguard();

        $faker = Faker\Factory::create();

        foreach(range(1, 40) as $index) {
            \App\adventureblog::create([
                'name'      => $faker->sentence(5),
                'header'    => $faker->sentence(15),
                'discription'   => $faker->text(1000),
                'photoLink' => 'images/adventureBlogs/image ('.$faker->numberBetween(1,50).').jpg',
                'creative'  => $faker->numberBetween(2, 18),
                'love'      => $faker->numberBetween(2, 10),
                'commentId' => $faker->numberBetween(1, 40),
                'postedBy'  => $faker->name,
                'youtubeLink'   => $faker->imageUrl(),
                'tagsId'    => $faker->numberBetween(1,10).",".$faker->numberBetween(1,10).",".$faker->numberBetween(1,10),
            ]);

            \App\technicalblog::create([
                'name'      => $faker->sentence(5),
                'header'    => $faker->sentence(15),
                'discription'   => $faker->text(1000),
                'photoLink' => 'images/technicalBlogs/image ('.$faker->numberBetween(1,50).').jpg',
                'creative'  => $faker->numberBetween(2, 18),
                'love'      => $faker->numberBetween(2, 10),
                'commentId' => $faker->numberBetween(1, 40),
                'postedBy'  => $faker->name,
                'youtubeLink'   => $faker->imageUrl(),
                'tagsId'    => $faker->numberBetween(1,10).",".$faker->numberBetween(1,10).",".$faker->numberBetween(1,10),
            ]);

            \App\bestblog::create([
                'name'      => $faker->sentence(5),
                'header'    => $faker->sentence(15),
                'discription'   => $faker->text(1000),
                'photoLink' => 'images/bestBlogs/image ('.$faker->numberBetween(1,50).').jpg',
                'creative'  => $faker->numberBetween(2, 18),
                'love'      => $faker->numberBetween(2, 10),
                'commentId' => $faker->numberBetween(1, 40),
                'postedBy'  => $faker->name,
                'youtubeLink'   => $faker->imageUrl(),
                'tagsId'    => $faker->numberBetween(1,10).",".$faker->numberBetween(1,10).",".$faker->numberBetween(1,10),
            ]);

            \App\comment::create([
                'name'      => $faker->name,
                'postedOn'  => $faker->dateTime,
                'avatarLink'=> 'images/avatars/avatar ('.$faker->numberBetween(1,40).').png',
                'comment'   => $faker->text(160),
                'likes'     => $faker->numberBetween(5, 25),
                'reportId'  => $faker->numberBetween(1,40),
            ]);

            \App\report::create([
                'name'      => $faker->name,
                'avatarId'  => 'images/avatars/avatar ('.$faker->numberBetween(1,40).').png',
                'subject'   => $faker->sentence(5),
                'details'   => $faker->text(100),
            ]);

            \App\tag::create([
                'name'      => $faker->word
            ]);

            \App\technicalblog::create([
                'name'      => $faker->word
            ]);
        }

        Model::reguard();
    }
}
