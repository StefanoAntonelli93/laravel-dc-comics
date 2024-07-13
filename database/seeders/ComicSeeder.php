<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // importo congif/comics.php
        $data = config('comics');
        // con truncate i dati non vengono inseriti nuovamente ma soltano una volta
        DB::table('comics')->truncate();
        //  ciclo per popolare la table comics con seed
        foreach ($data as $comic_db) {
            $comic = new Comic();
            $comic->title = $comic_db['title'];
            $comic->description = $comic_db['description'];
            $comic->thumb = $comic_db['thumb'];
            $comic->price = $comic_db['price'];
            $comic->series = $comic_db['series'];
            $comic->sale_date = $comic_db['sale_date'];
            $comic->type = $comic_db['type'];
            $comic->artists = json_encode($comic_db['artists']);
            $comic->writers = json_encode($comic_db['writers']);
            $comic->save();
        }
    }
}
