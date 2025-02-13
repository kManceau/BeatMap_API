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
        $event->artists()->attach([5]);
        $event = Event::find(2);
        $event->artists()->attach([6, 7]);
        $event = Event::find(3);
        $event->artists()->attach([8, 9]);
        $event = Event::find(4);
        $event->artists()->attach([1, 5]);
    }
}
