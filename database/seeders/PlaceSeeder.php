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
            'photo' => 'lakermessefestival',
            'user_id' => 1,
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
            'photo' => 'lebateauivre',
            'user_id' => 1,
        ]);
        Place::create([
            'id' => 3,
            'name' => 'Les Kampagn\'arts',
            'description' => 'Festival de musique aktuelle en Kampagne',
            'address' => 'Moulin de l\'Image',
            'city' => 'Saint-Paterne-Racan',
            'state' => 'Centre-Val de Loire',
            'zip' => '37370',
            'country' => 'France',
            'latitude' => '47.60539630613135',
            'longitude' => '0.4739509503831851',
            'photo' => '',
            'user_id' => 1,
        ]);
        Place::create([
            'id' => 4,
            'name' => 'Château de Candé',
            'description' => "Le château de Candé est un édifice de style Louis XII, situé dans la commune de Monts, dans le département français d'Indre-et-Loire en région Centre-Val de Loire. Il se trouve à 10 km au sud-sud-ouest de Tours sur la rive de l'Indre, au cœur d'un domaine de 260 hectares.",
            'address' => 'Château de Candé',
            'city' => 'Monts',
            'state' => 'Centre-Val de Loire',
            'zip' => '37260',
            'country' => 'France',
            'latitude' => '47.296523840051236',
            'longitude' => '0.6659945731075044',
            'photo' => '',
            'user_id' => 1,
        ]);
        Place::create([
            'id' => 5,
            'name' => 'Clisson',
            'description' => "La ville est aussi connue comme Clisson l'italienne en raison de son architecture de style italianisant inspirée de modèles ruraux d'Italie centrale (Ombrie, Latium et Toscane) et de l'aspect paysager de la ville, composé par un artiste du début du XIXe siècle, François-Frédéric Lemot.",
            'address' => 'Rue du Champ Louet',
            'city' => 'Clisson',
            'state' => 'Loire-Atlantique',
            'zip' => '44190',
            'country' => 'France',
            'latitude' => '47.097236330005714',
            'longitude' => '-1.2696034247926133',
            'photo' => '',
            'user_id' => 1,
        ]);
    }
}
