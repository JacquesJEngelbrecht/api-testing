<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('member')->insert([
            [
                'name'=>'Bom',
                'email'=>'1313bom@gmail.com',
                'address'=>'Cape Town'
            ],
            [
                'name'=>'Jacques',
                'email'=>'jacques@gmail.com',
                'address'=>'Cape Town'
            ]
        ]);
    }
}
