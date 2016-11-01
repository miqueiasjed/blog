<?php

use App\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Miqueias Mesquita',
            'email'=>'miqueiasjedmike@gmail.com',
            'password'=> bcrypt('123456'),
            'role' => 'Include',
            'active' =>1
        ]);
    }

}
