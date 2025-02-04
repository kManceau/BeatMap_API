<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = Event::find(1);
        $event->artists()->attach([3]);
        $event = Event::find(2);
        $event->artists()->attach([2,3,4]);
    }
}
