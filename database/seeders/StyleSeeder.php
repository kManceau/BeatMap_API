<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Style::create([
            'id' => 1,
            'name' => 'Death Metal',
            'description' => 'Le death metal est un sous-genre musical extrême, du heavy metal. Il emploie généralement des guitares très distordues, des tremolo picking, des growling profonds, des blast beats, les gammes mineures et des structures complexes avec de multiples changements de tempo.',
        ]);
        Style::create([
            'id' => 2,
            'name' => 'Rap',
            'description' => 'Le rap est un mouvement culturel et musical (musique populaire) qui tire ses origines du hip-hop. Apparu au début des années 1970 dans les ghettos américains, le rap se caractérise par une diction très rythmée et l’usage de la rime.',
        ]);
        Style::create([
            'id' => 3,
            'name' => 'Chanson Humoristique',
            'description' => 'L\'humour, au sens large, est une forme d\'esprit railleuse « qui s\'attache à souligner le caractère comique, ridicule, absurde ou insolite de certains aspects de la réalité, dans le but de faire rire ou de divertir un public ».',
        ]);
        Style::create([
            'id' => 4,
            'name' => 'Disco',
            'description' => 'Le disco est un genre musical et une danse apparus aux États-Unis au milieu des années 1970. Issu des genres funk, soul, pop, salsa et psychédélique, le disco est particulièrement popularisé pendant les années 1970, et revivra brièvement pendant quelque temps. Le terme dérive du mot en français « discothèque ».',
        ]);
    }
}
