<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'nova',
                'email' => 'nova@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/gBKvKJxnuOwrf0TRhauUezC.CkoRcW2R/oeNTWPRC65KJRjK5v7C',
                'remember_token' => NULL,
                'created_at' => '2018-11-28 20:48:22',
                'updated_at' => '2018-11-28 20:48:22',
            ),
        ));
        
        
    }
}