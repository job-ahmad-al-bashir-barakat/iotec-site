<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('positions')->delete();
        
        \DB::table('positions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CO-FOUNDER',
                'code' => 'CEO',
                'created_at' => '2018-11-29 12:42:37',
                'updated_at' => '2018-11-29 12:42:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}