<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $positions = array("CEO","CTO","Head of Marketing Deparment","Marketing Departments staff","Sales Manager","Sales Department Staff","B2B Departments Staff","Head of B2B Department","Head of PR department","PR department Staff");
        foreach ($positions as $position){
            DB::table('positions')->insert([
                "position_name"=>$position
            ]);

        }
    }
}
