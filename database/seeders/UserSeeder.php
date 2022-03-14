<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id'=>1,
                'name'=>'Grondin',
                'firstname'=>'Steven',
                'email'=>'sgrondin83@gmail.com',
                'password'=>Hash::make('admin')
            ]
            ];
            DB::table('user')->insert($user);
    } //php artisan migrate --seed
}
