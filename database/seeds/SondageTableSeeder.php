<?php

use Illuminate\Database\Seeder;

class SondageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sondages')->insert([
            'nom'=>'Bigscreen' 	
        ]);
    }
}
