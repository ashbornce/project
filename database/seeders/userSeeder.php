<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isi =
        [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin1234'),

            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@mail.com',
                'password' => bcrypt('admin21234'),

            ],
        ];
        foreach($isi as $key => $i)
        User::create($i);
    }
}
