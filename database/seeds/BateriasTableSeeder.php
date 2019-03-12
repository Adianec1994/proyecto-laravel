<?php

use Illuminate\Database\Seeder;

class BateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=1;
        while ($i<16){
            DB::table('baterias')->insert([
                'numero' => $i,
                ]);
            $i++;
        }
    }
}
