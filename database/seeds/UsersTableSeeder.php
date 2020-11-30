<?php

use Illuminate\Database\Seeder;
use App\User;
use App\role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = role::where('name','admin')->first();
        $authorRole = role::where('name','author')->first();
        $userRole = role::where('name','user')->first();



        $admin = User::create([
        	'name' => 'admin',
        	'email' =>'admin@admin.com',
        	'password' => bcrypt('admin') 

        ])


        $author = User::create([
        	'name' => 'author',
        	'email' =>'author@author.com',
        	'password' => bcrypt('author') 

        ])



        $user = User::create([
        	'name' => 'user',
        	'email' =>'user@user.com',
        	'password' => bcrypt('user') 

        ])

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
