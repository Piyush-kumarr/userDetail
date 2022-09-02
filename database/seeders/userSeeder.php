<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
// use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"petter",
            "email"=>"petter@gmail.com",
            "password"=>Hash::make('1234'),
            "gender"=>"Male",
            "phone"=>"9023456889",
        ]);
        
    }
}
