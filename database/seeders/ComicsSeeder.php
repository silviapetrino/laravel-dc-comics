<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {


        $all_comics = config('comics');

        foreach ($all_comics as $comic) {
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->artists = $comic['artists'];
            $new_comic->writers = $comic['writers'];

            $artists_list = '';

                foreach($new_comic->artists as $artist) {
                    $artists_list .= $artist . ', ';
                }

            $writers_list = '';

            $new_comic->artists = $artists_list;

                foreach($new_comic->writers as $writer) {
                    $writers_list .= $writer . ', ';
                }

            $new_comic->writers = $writers_list;

            $new_comic->save();

        }


    }
}
