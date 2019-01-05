<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tables')->delete();
        
        \DB::table('tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'User',
                'resource_class' => 'App\\Nova\\User',
                'model_class' => NULL,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Team',
                'resource_class' => 'App\\Nova\\Team',
                'model_class' => NULL,
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Position',
                'resource_class' => 'App\\Nova\\Position',
                'model_class' => NULL,
                'order' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Icon',
                'resource_class' => 'App\\Nova\\Icon',
                'model_class' => NULL,
                'order' => 4,
                'created_at' => NULL,
                'updated_at' => '2018-12-01 17:46:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Social Network',
                'resource_class' => 'App\\Nova\\SocialNetwork',
                'model_class' => NULL,
                'order' => 5,
                'created_at' => NULL,
                'updated_at' => '2018-12-01 17:46:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Table',
                'resource_class' => 'App\\Nova\\Table',
                'model_class' => NULL,
                'order' => 6,
                'created_at' => NULL,
                'updated_at' => '2018-12-01 17:46:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}