<?php

namespace Database\Seeders;

use App\Models\UserWorkout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserWorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::create('2023-03-25');
        $data = [
            ['workout_realtime' => '799', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '1', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '470', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '2', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '654', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '3', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '306', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '4', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '366', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '5', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '350', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '6', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '668', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '7', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '681', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '8', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '829', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '9', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '350', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '10', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '811', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '11', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '672', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '12', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '396', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '13', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '843', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '14', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '429', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '15', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '604', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '16', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '708', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '17', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '666', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '18', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '808', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '19', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '485', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '20', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '438', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '21', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '333', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '22', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '331', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '23', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '399', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '24', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '889', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '25', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '887', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '26', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '381', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '27', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '678', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '28', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '892', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '29', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '648', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '30', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '669', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '31', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '650', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '32', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '363', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '33', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '720', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '34', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '703', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '35', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '321', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '36', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '547', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '37', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '540', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '38', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
            ['workout_realtime' => '491', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '39', 'created_at' => $date->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
//            ['workout_realtime' => '315', 'calo_real' => '900', 'user_id' => '1', 'workout_id' => '40', 'created_at' => $date->addDay(1)->toDateTimeString(), 'updated_at' => $date->toDateTimeString()],
        ];
        foreach ($data as $each) {
            UserWorkout::query()->create($each);
        }
    }
}
