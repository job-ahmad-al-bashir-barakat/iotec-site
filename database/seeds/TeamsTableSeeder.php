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
                'excerpt' => '<div><strong>Alec Thompson<br></strong><br></div>',
                'avatar' => 'KIGdMIhqr2A05yGII1dwqqVetUkX2iNmvAcqkh3g.jpeg',
                'position_id' => 1,
                'active' => 1,
                'created_at' => '2018-11-29 12:48:10',
                'updated_at' => '2018-11-29 12:48:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}