<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for($i = 1;$i <= 50;$i++)
        {
            DB::table('dosen')->insert([
                'nidn' => $faker-> nik(),
                'nama' =>  $faker-> name(),
                'status' =>  $faker-> suffix(),
                'jafung' =>  $faker-> title(),
                'pakar' =>  $faker->jobTitle()
            ]);
        }
}
}