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
            'name' => "THE EXPLOITED + ACID DROP : Les 50 ans du Punk !",
            'type' => 'concert',
            'description' => "Après deux faux départ en 2024, The Exploited débarquent enfin à Tours ! Si la réputation de Tours en terme de punk rock n’est plus à faire, ça fait belle lurette qu’elle n’avait pas accueilli une telle légende du punk UK. Se revendiquant clairement du mouvement anarchiste, clamant à tout un chacun son dégoût du système, incitant aux émeutes et se montrant favorable au combat contre le capitalisme et la répression policière, la bande à Wattie débarque au Bateau bien disposée à le retourner comme une crète.",
            'start_date' => '2025-04-02',
            'end_date' => '2025-04-02',
            'photo' => 'theexploitedaciddroples50ansdupunk',
            'user_id' => 1,
            'place_id' => 2,
        ]);
        Event::create([
            'id' => 2,
            'name' => "Les Kampagn'arts 2025",
            'type' => 'festival',
            'description' => "Festival de musique aktuelle en Kampagne",
            'start_date' => '2025-06-27',
            'end_date' => '2025-06-28',
            'photo' => 'leskampagnarts2025',
            'user_id' => 1,
            'place_id' => 3,
        ]);
        Event::create([
            'id' => 3,
            'name' => "Terres du Son 2025",
            'type' => 'festival',
            'description' => "Le festival éthique et responsable Terres du Son est un festival de musique créé en 2005 à Tours, et ayant lieu tous les ans au Domaine de Candé à Monts (Indre-et-Loire). Sur une durée de 3 jours, le festival cherche à faire découvrir de jeunes talents ainsi que des artistes locaux, notamment grâce au dispositif Propul'Son de la Fracama (Fédération Régionale des Acteurs Culturels et Associatifs des Musiques Actuelles) en Centre-Val de Loire. Engagé dans une démarche solidaire, le festival travaille en collaboration avec des structures médicaux sociales , invite de nombreuses associations, et propose de multiples activités, conférences et concerts gratuits au sein de l’Éco-Village avec un espace réservé au jeune public. ",
            'start_date' => '2025-07-11',
            'end_date' => '2025-07-13',
            'photo' => 'terresduson2025',
            'user_id' => 1,
            'place_id' => 4,
        ]);
    }
}
