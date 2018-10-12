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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CategoryDetailSeed::class);
        $this->call(CategorySeed::class);
        $this->call(DescriptionSeed::class);
        $this->call(SummarieSeed::class);
        $this->call(AddressSeed::class);
        $this->call(CompanySeed::class);


    }
}
