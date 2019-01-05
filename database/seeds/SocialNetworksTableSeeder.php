<?php

use Illuminate\Database\Seeder;

class SocialNetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_networks')->delete();
        
        \DB::table('social_networks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Twitter',
                'icon_id' => 713,
                'url' => NULL,
                'created_at' => '2019-01-03 22:07:42',
                'updated_at' => '2019-01-03 22:07:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LinkedIn',
                'icon_id' => 413,
                'url' => NULL,
                'created_at' => '2019-01-03 22:08:18',
                'updated_at' => '2019-01-03 22:08:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Github',
                'icon_id' => 314,
                'url' => NULL,
                'created_at' => '2019-01-03 22:08:35',
                'updated_at' => '2019-01-03 22:08:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}