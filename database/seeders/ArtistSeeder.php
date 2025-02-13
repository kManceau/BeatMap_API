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
            'photo' => 'cannibalcorpse',
            'style_id' => 1,
        ]);
        Artist::create([
            'id' => 2,
            'name' => 'The Lonely Island',
            'description' => 'The Lonely Island est un trio comique américain, formé en 2001 par Akiva Schaffer, Andy Samberg et Jorma Taccone à Berkeley, en Californie. Le trio se forme à la Berkeley High School. Après leurs études, les membres se regroupent et emménagent à Los Angeles, Californie, où ils ne peuvent trouver du travail et tournent dans des films, mêlant comédie absurde et occasionnellement la musique.',
            'photo' => 'thelonelyisland',
            'style_id' => 2,
        ]);
        Artist::create([
            'id' => 3,
            'name' => 'Giedre',
            'description' => 'Giedrė Barauskaitė, dite GiedRé, est une auteure-compositrice-interprète et humoriste d\'expression française d\'origine lituanienne, née le 23 octobre 1985 à Vilnius.',
            'photo' => 'giedre',
            'style_id' => 3,
        ]);
        Artist::create([
            'id' => 4,
            'name' => 'Boney M',
            'description' => 'Boney M. est un groupe de disco et pop, originaire d\'Allemagne de l\'Ouest. Il est formé et dirigé par le compositeur et producteur allemand Frank Farian. Les quatre membres originels du groupe sont Bobby Farrell, Liz Mitchell, Maizie Williams et Marcia Barrett. Reggie Tsiboe se joint au groupe en 1982, après le départ de Bobby Farell et jusqu\'à son retour.',
            'photo' => 'boneym',
            'style_id' => 4,
        ]);
        Artist::create([
            'id' => 5,
            'name' => 'The Exploited',
            'description' => "The Exploited est un groupe de punk rock écossais, originaire d'Édimbourg, en Écosse. À partir du classique punk rock des débuts, le groupe intègre rapidement des éléments de punk hardcore et de oi! à son jeu, faisant évoluer sa musique dans un registre rapide et nerveux. Depuis la fin des années 1980, le groupe incorpore des éléments de thrash metal à sa palette, renforçant encore le caractère brutal de sa musique.",
            'photo' => 'theexploited',
            'style_id' => 5,
        ]);
        Artist::create([
            'id' => 6,
            'name' => 'L.E.J',
            'description' => "Le groupe LEJ (initiales des prénoms de Lucie, Elisa et Juliette ; souvent typographié L.E.J), également orthographié Elijay suivant sa prononciation, est un trio musical de chant, percussion et violoncelle. Ces trois étudiantes françaises, originaires de Saint-Denis, connaissent un succès inattendu en août 2015 grâce à leur clip Summer 2015, un mashup posté sur YouTube.",
            'photo' => 'lej',
            'style_id' => 6,
        ]);
        Artist::create([
            'id' => 7,
            'name' => 'Petit Biscuit',
            'description' => "Petit Biscuit nom de scène de Mehdi Benjelloun, né le 10 novembre 1999 à Rouen, est un DJ et producteur de musique électronique français d'origine franco-marocaine.",
            'photo' => 'petitbiscuit',
            'style_id' => 7,
        ]);
        Artist::create([
            'id' => 8,
            'name' => 'Clara Luciani',
            'description' => "Clara Luciani revient avec son troisième album, Mon Sang, un chef-d’œuvre de pop élégant et chaleureux, qui explore la famille, les liens, et la tendresse avec une profondeur rare. Après le succès retentissant de Sainte Victoire et Cœur, cette artiste multi-récompensée aux Victoires de la Musique prouve qu’elle sait se réinventer tout en restant fidèle à son style intemporel. Inspirée des Beatles, de Lana Del Rey et de Françoise Hardy, sa musique unit passé et futur dans une célébration mélancolique et vibrante de l’amour et des racines. Avec des morceaux intimes et universels, comme « Tout pour moi » ou « Forget me not », Clara vous invite à un voyage émotionnel entre ballades poignantes et envolées épiques. Entourée de ses fidèles collaborateurs et mixée par le légendaire Mark Spike Stent (Harry Styles, Lady Gaga), elle propose un univers musical organique et sculpté. Ne manquez pas ce moment unique où vitalité et nostalgie se mêlent, promettant une performance inoubliable sous le ciel de Terres du Son.",
            'photo' => 'claraluciani',
            'style_id' => 6,
        ]);
        Artist::create([
            'id' => 9,
            'name' => 'Théa',
            'description' => "THÉA et son emo-core révolté transforment les affres d’une génération en fête insolente, fédératrice et jouissive. Des textes sensibles et viscéraux, portés par une grande bacchanale pop-punk-hyperpop. Son projet raconte le chaos que vit une jeune fille queer dans ses relations, sa santé mentale et les systèmes oppressifs qui l’entourent. Une claque renversante et dansante.",
            'photo' => 'thea',
            'style_id' => 7,
        ]);
    }
}
