<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BugsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bugs')->delete();

        $status = [
            'open',
            'investigation',
            'confirmed',
            'close'
        ];

        for ($i = 0; $i < 250; ++$i) {
            $date = $this->randDate();
            DB::table('bugs')->insert([
                'title' => 'Titre' . $i,
                'description' => 'Contenu' . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => rand(1, 50),
                'status' => $status[rand(0, 3)],
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }
}
