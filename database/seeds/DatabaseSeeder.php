<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(SocialNetworksTableSeeder::class);
    }
}
