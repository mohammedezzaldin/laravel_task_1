<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'name' => 'Laravel',
            'email' => 'mohammedezz@gmail.com',
            'keywords' => 'Laravel PHP',
            'description' => 'lorem lorem lore lorem lorem lormlorem lorem
             lore lorem lorem lormlorem lorem lore lorem lorem lorm',
            'maintenance_state' => 0,
            'maintenance_message' => 'maintenance message'
        ]);
    }
}
