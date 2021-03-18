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

        App\User::create([
            'name' => 'Frank Lisboa Abad',
            'email' => 'soporte@gmail.com',
            'password' => bcrypt('secreto')
        ]);

        factory(App\Category::class,10)->create();
        factory(App\Post::class,30)->create();
        
    }
}
