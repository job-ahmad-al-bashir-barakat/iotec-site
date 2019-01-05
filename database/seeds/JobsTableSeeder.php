<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'FULL STACK DEVELOPER',
                'created_at' => '2019-01-03 22:29:24',
                'updated_at' => '2019-01-03 22:29:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}