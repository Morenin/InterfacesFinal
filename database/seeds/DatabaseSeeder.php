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
        DB::table('cicles')->insert([
            'id' => '0',
            'name' => 'admin',
            'img' => 'admin'
        ]);
        DB::table('Users')->insert([
            'name' => 'admin',
            'surname' => 'global',
            'cicle_id'=> '1',
            'actived' => true,
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'type' => 'ad',
            'num_offer_applied'=> '0'
        ]);
        factory(\App\cicle::class, 20)->create();
        factory(\App\offer::class, 20)->create();
        factory(\App\User::class, 100)->create();
        factory(\App\article::class, 20)->create();
        factory(\App\applied::class, 20)->create();
        factory(\App\requirement::class, 20)->create();
        
    }
}
