<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *0
     * @return void
     */
    public function run()
    {
        
        User::insert([
           'name'=> 'Pooja',
           'email' =>'pooja.alitainfotech@gmail.com',
           'password'=>Hash::make('password')
        ]);
    }
}
