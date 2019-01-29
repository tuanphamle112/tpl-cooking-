<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              =>  'Tao la admin',
            'email'             =>  'admin@gmail.com',
            'password'          =>  Hash::make('Nguvl111'),
            'phone'             =>  '0968534860',
            'address'           =>  'So nha XXX, YYY, ZZZ',
            'remember_token'    =>  str_random(10),  
            'permission'        =>  1,
        ]);
        User::create([
            'name'              =>  'Khong phai admin',
            'email'             =>  'xxx@gmail.com',
            'password'          =>  Hash::make('123456'),
            'remember_token'    =>  str_random(10),  
            'permission'        =>  2,
        ]);
    }
}
