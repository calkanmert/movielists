<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert(
                [
                    [
                        'name' => 'Mert',
                        'surname' => 'Çalkan',
                        'email' => 'mertcalkan@hotmail.com',
                        'password' => Hash::make('123789456'),
                        'role' => 'admin',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ],
                    [
                        'name' => 'Ufuk',
                        'surname' => 'Yıldırım',
                        'email' => 'ufukyildirim@gmail.com',
                        'password' => Hash::make('123789456'),
                        'role' => 'user',
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]
                ]
            );
    }
}
