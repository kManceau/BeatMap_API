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
        Style::create([
            'id' => 5,
            'name' => 'Punk',
            'description' => 'Le punk rock est un genre musical dérivé du rock, ayant émergé au milieu des années 1970 et associé au mouvement punk de cette même époque. Précédé par une variété de musique protopunk des années 1960 et du début des années 1970, le punk rock se développe surtout entre 1974 et 1976 aux États-Unis, au Royaume-Uni et en Australie. Des groupes comme les Ramones, les Sex Pistols, et The Saints sont reconnus comme les pionniers d\'un nouveau mouvement musical. Les groupes de punk rock, s\'opposant à la lourdeur qu\'ils jugent excessive et à l\'institutionnalisation du rock populaire des années 1970, créent une musique rapide et rude, généralement servie par des chansons de courte durée, une instrumentation simplifiée et des paroles souvent chargées de messages politiques ou nihilistes.',
        ]);
        Style::create([
            'id' => 6,
            'name' => 'Pop',
            'description' => "La musique pop (ou simplement la pop) est un genre musical, apparu au milieu du 20e siècle au Royaume-Uni et aux États-Unis, où cette musique populaire \"popular music\" est vite qualifiée de \"pop music\". Au début, dans les années 1950 et 1960, la musique pop englobe le rock and roll et les styles orientés jeunesse[évasif]. Ce n'est qu'à la fin des années 1960 que le terme \"pop\" qualifie une musique plus commerciale, faite de morceaux courts et \"dansants\". Son évolution doit beaucoup à l'apparition de l'enregistrement sonore à pistes multiples, vers la fin des années 1960, et à celle du synthétiseur, dans les années 1970 et 1980.",
        ]);
        Style::create([
            'id' => 7,
            'name' => 'Electro',
            'description' => "La musique électronique est un type de musique conçu dans les années 1950 avec des générateurs de signaux et de sons synthétiques. Avant de pouvoir être utilisée en temps réel, elle a été enregistrée sur bande magnétique, ce qui permettait aux compositeurs de manier aisément les sons, par exemple dans l'utilisation de boucles répétitives superposées. Ses précurseurs ont pu bénéficier de studios spécialement équipés ou faisaient partie d'institutions musicales préexistantes. La musique pour bande de Pierre Schaeffer, également appelée musique concrète, se distingue de ce type de musique dans la mesure où sa conception n'est pas basée sur l'utilisation d'un matériau précis mais l'inversion de la démarche de composition qui part des sons et non de la structure. La particularité de la musique électronique de l'époque est de n'utiliser que des sons générés par des appareils électroniques. ",
        ]);
    }
}
