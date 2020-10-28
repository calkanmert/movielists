<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')
            ->insert(
                [
                    [
                        'key' => 'title',
                        'value' => 'Kendi film listenizi oluşturun ve kolayca paylaşın'
                    ],
                    [
                        'key' => 'email',
                        'value' => 'iletisim@mertcalkan.com'
                    ]
                ]
            );
    }
}
