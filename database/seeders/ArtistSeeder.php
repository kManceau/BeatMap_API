<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::create([
            'id' => 1,
            'name' => 'Cannibal Corpse',
            'description' => 'Cannibal Corpse est un groupe de death metal américain. Fondé en 1988 et initialement composé de Chris Barnes, Bob Rusay, Jack Owen, Alex Webster et Paul Mazurkiewicz, le groupe est considéré, avec quelques autres, comme étant un groupe pionnier dans le brutal death metal.',
            'photo' => null,
            'style_id' => 1,
        ]);
        Artist::create([
            'id' => 2,
            'name' => 'The Lonely Island',
            'description' => 'The Lonely Island est un trio comique américain, formé en 2001 par Akiva Schaffer, Andy Samberg et Jorma Taccone à Berkeley, en Californie. Le trio se forme à la Berkeley High School. Après leurs études, les membres se regroupent et emménagent à Los Angeles, Californie, où ils ne peuvent trouver du travail et tournent dans des films, mêlant comédie absurde et occasionnellement la musique.',
            'photo' => null,
            'style_id' => 2,
        ]);
        Artist::create([
            'id' => 3,
            'name' => 'Giedre',
            'description' => 'Giedrė Barauskaitė, dite GiedRé, est une auteure-compositrice-interprète et humoriste d\'expression française d\'origine lituanienne, née le 23 octobre 1985 à Vilnius.',
            'photo' => null,
            'style_id' => 3,
        ]);
        Artist::create([
            'id' => 4,
            'name' => 'Boney M',
            'description' => 'Boney M. est un groupe de disco et pop, originaire d\'Allemagne de l\'Ouest. Il est formé et dirigé par le compositeur et producteur allemand Frank Farian. Les quatre membres originels du groupe sont Bobby Farrell, Liz Mitchell, Maizie Williams et Marcia Barrett. Reggie Tsiboe se joint au groupe en 1982, après le départ de Bobby Farell et jusqu\'à son retour.',
            'photo' => null,
            'style_id' => 4,
        ]);
    }
}
