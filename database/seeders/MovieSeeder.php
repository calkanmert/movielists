<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')
            ->insert(
                [
                    'name' => 'Avengers: Infinity War',
                    'description' => 'Yenilmezler: Sonsuzluk Savaşı, Marvel Comics\' in aynı adlı çizgi roman serisinden uyarlanmış, on dokuzuncu Marvel Sinematik Evreni süper kahraman filmi. Marvel\'ın en karizmatik süper kahramanları yeni maceralarında bir kez daha bir araya geliyor. Güçlü ekip bu kez korkunç titan \'a karşı savaşacaklar.',
                    'trailer_url' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
                    'poster_url' => 'https://i.hizliresim.com/nQCl9M.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
    }
}
