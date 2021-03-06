<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DB\User::class, 1)->create();
        factory(App\Models\DB\Post::class, 50)->create();
    }
}
