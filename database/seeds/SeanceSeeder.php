<?php

use Illuminate\Database\Seeder;

class SeanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('seances')->insert([
            'seance_code' => "Se1",
            'meeting_time' => "8h:00-9h:30",
            
        ]);

                     DB::table('seances')->insert([
            'seance_code' => "Se2",
            'meeting_time' => "9h:35-11h00",
            
        ]);

                            DB::table('seances')->insert([
            'seance_code' => "Se3",
            'meeting_time' => "11h:05-12h:45",
            
        ]);

                                   DB::table('seances')->insert([
            'seance_code' => "Se4",
            'meeting_time' => "13h:00-14h15",
            
        ]);

                                        DB::table('seances')->insert([
            'seance_code' => "Se5",
            'meeting_time' => "14h15-15h50",
            
        ]);

    }
}
