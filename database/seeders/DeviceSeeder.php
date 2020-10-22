<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device')->insert([
            [
                'name'=>'mobile',
                'member_id'=>1
            ],
            [
                'name'=>'laptop',
                'member_id'=>2
            ],
            [
                'name'=>'smart watch',
                'member_id'=>2
            ],
            [
                'name'=>'computer',
                'member_id'=>2
            ],
            [
                'name'=>'laptop',
                'member_id'=>1
            ]
        ]);
    }
}
