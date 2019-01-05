<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Alec Thompson',
                'excerpt' => 'Hi',
                'avatar' => 'vhdavMgKljBtp0ELWBrXOcpLM6dz5cw7O3So2ZqJ.jpeg',
                'job_id' => 1,
                'position_id' => 1,
                'active' => 1,
                'created_at' => '2018-11-29 12:48:10',
                'updated_at' => '2019-01-03 22:30:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}