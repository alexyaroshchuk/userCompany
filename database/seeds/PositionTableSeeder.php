<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position1 = new Position();
        $position1->position = "Director";
        $position1->save();
        $position2 = new Position();
        $position2->position = "Big Manager";
        $position2->save();
        $position3 = new Position();
        $position3->position = "Manager";
        $position3->save();
        $position4 = new Position();
        $position4->position = "Small Manager";
        $position4->save();
        $position5 = new Position();
        $position5->position = "Employee";
        $position5->save();
    }
}
