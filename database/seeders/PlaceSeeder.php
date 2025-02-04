<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            'id' => 1,
            'name' => 'La Kermesse Festival',
            'description' => 'La Plus Grande Kermesse de France ! La Kermesse Festival réunit la nostalgie des années 2000, le confort des festivaliers et une émotion incroyable, durant ces différents festivals.',
            'address' => 'Parc de la Navale',
            'city' => 'La Seyne-Sur-Mer',
            'state' => 'Provence-Alpes-Côte-d\'Azur',
            'zip' => '83500',
            'country' => 'France',
            'latitude' => '43.101745037272835',
            'longitude' => '5.885990570469692',
            'photo' => null,
            'created_by' => 1,
        ]);
        Place::create([
            'id' => 2,
            'name' => 'Le Bateau Ivre',
            'description' => 'Terre en vue ! Le Bateau Ivre se veut créateur d’un espace de partage pluridisciplinaire entre musique, théâtre, danse, lecture… dans un seul et même lieu. Dénuée de programmateur, la salle du Bateau Ivre laisse place à la création et à l’imaginaire artistique.',
            'address' => '146 rue Edouard Vaillant',
            'city' => 'Tours',
            'state' => 'Centre-Val de Loire',
            'zip' => '37000',
            'country' => 'France',
            'latitude' => '47.38463899422877',
            'longitude' => '0.7013454824868651',
            'photo' => null,
            'created_by' => 1,
        ]);
    }
}
