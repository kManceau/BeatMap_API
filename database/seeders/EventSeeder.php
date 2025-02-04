<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'id' => 1,
            'name' => 'GiéDré en concert !',
            'type' => 'concert',
            'description' => 'Venez écoutez GiéDré jouer son dernier album !',
            'start_date' => '2025-03-10',
            'end_date' => '2025-03-10',
            'photo' => null,
            'user_id' => 1,
            'place_id' => 2,
        ]);
        Event::create([
            'id' => 2,
            'name' => 'La Kermesse Festival',
            'type' => 'festival',
            'description' => 'Meilleur Festival de France, voir même du monde.',
            'start_date' => '2025-08-01',
            'end_date' => '2025-08-03',
            'photo' => null,
            'user_id' => 1,
            'place_id' => 1,
        ]);
    }
}
