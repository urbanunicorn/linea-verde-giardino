<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            1 => [
                'Appendiabiti', 'Armadi', 'Cassettiere', 'Comodini', 'Divani', 'Letti', 'Librerie',
                'Mensole e Scaffali', 'Mobili contenitori', 'Poltrone', 'Pouf', 'Scrivanie', 'Sedie',
                'Sgabelli', 'Tappeti', 'Tavoli', 'Tavolini', 'Vasi',
            ],
            2 => [
                'Illuminazione da esterno', 'Lampade Led', 'Lampade da parete', 'Lampade da soffitto',
                'Lampade da tavolo', 'Lampade da terra', 'Lampade per la camera', 'Lampadine e Ricambi',
                'Lampade decorative e oggetti luminosi',
            ],
            3 => [
                'Divani', 'Lettini', 'Ombrelloni', 'Poltrone', 'Sedie', 'Tappeti', 'Tavoli', 'Tavolini', 'Vasi',
            ],
            4 => [
                'Bicchieri', 'Caffe e The', 'Caraffe e Brocche', 'Centrotavola e Alzate', 'Ciotole e Contenitori',
                'Contenitori per rifiuti', 'Griglie e Barbecue', 'Olio aceto e Sale pepe', 'Pentole e Padelle',
                'Piatti', 'Posate', 'Taglieri, ceppi e coltelli', 'Tavola per bambini', 'Tovaglie', 'Utensili', 'Vassoi',
            ],
            5 => [
                'Accappatoi', 'Asciugamani', 'Contenitori', 'Mobili da bagno', 'Pulizia', 'Spazzolini da denti', 'Tappettini',
            ],
            6 => [
                'Accessori bagno', 'Accessori da parete', 'Accessori da scrivania', 'Accessori per animali',
                'Candele e Portacandele', 'Contenitori e Salvaspazio', 'Contenitori per rifiuti', 'Decorazioni da esterno',
                'Mensole e Scaffali', 'Oggetti decorativi', 'Oggetti funzionali', 'Orologi', 'Specchi',
                'Stampe e Adesivi murali', 'Vasi', 'Zerbini',
            ],
            7 => [
                'Caricabatterie', 'Lampade smart', 'Altoparlanti', 'Accessori per dispositivi elettronici',
                'Articoli per la casa smart',
            ],
            8 => [
                'Utensili', 'Materiali per il fai da te', 'Accessori per il fai da te', 'Attrezzi elettrici',
                'Vernici e finiture',
            ],
            9 => [
                'Alberi di Natale', 'Luci natalizie', 'Ornamenti', 'Centrotavola', 'Accessori festivi',
            ],
        ];

        foreach ($categories as $categoryId => $subcategories) {
            foreach ($subcategories as $subcategory) {
                Subcategory::create([
                    'category_id' => $categoryId,
                    'name' => $subcategory,
                ]);
            }
        }
    }
}
