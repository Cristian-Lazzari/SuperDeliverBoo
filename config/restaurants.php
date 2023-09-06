<?php


use Faker\Factory as Faker;

$faker = Faker::create();

return $restaurants = [
    // Pizzerie 
    [
        "activity_name" => "Caprese Trieste",
        "description" => "pizzeria",
        "address" => "Piazza della Borsa 15",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Al Campanon",
        "description" => "pizzeria,trattoria",
        "address" => "Via S. Giusto 2",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Al Civico 6",
        "description" => "pizzeria",
        "address" => "Via del Toro 6",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // Giapponese
    [
        "activity_name" => "Sushi Queen Trieste",
        "description" => "giapponese,cinese",
        "address" => "Via Milano 16",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Sakura",
        "description" => "giapponese",
        "address" => "Riva Nazario Sauro 6 ",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Kaori Sushi",
        "description" => "giapponese,cinese",
        "address" => "Piazza Dalmazia 4",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // Trattoria
    [
        "activity_name" => "Trattoria Mara",
        "description" => "trattoria",
        "address" => "Via Vittoria Colonna 5",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Trattoria NerodiSeppia",
        "description" => "trattoria",
        "address" => "Via Cadorna 7",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Trattoria al Faro",
        "description" => "trattoria",
        "address" => "Via Giuseppe Sforzi 2",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // Gelateria
    [
        "activity_name" => "Gelateria D'Ampoli",
        "description" => "gelateria",
        "address" => "Via Carlo Ghega 10",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Oggi Gelato",
        "description" => "gelateria",
        "address" => "Via Cesare Battisti 13",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Gelato Marco",
        "description" => "gelateria",
        "address" => "Via Malcanton 16",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // FastFood
    [
        "activity_name" => "Mc Donalds - Goldoni",
        "description" => "fast-food",
        "address" => "Piazza Goldoni 1",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Mc Donalds - Flavia",
        "description" => "fast-food",
        "address" => "Via Flavia 104",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "La Piadineria",
        "description" => "fast-food",
        "address" => "Via San Nicolo 22",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Panzerottò",
        "description" => "fast-food,pizzeria",
        "address" => "Via del Toro 4",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // Indiano
    [
        "activity_name" => "Yoga",
        "description" => "indiano",
        "address" => "Via Filippo Corridoni 2",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Krishna",
        "description" => "indiano",
        "address" => "Via Guido Brunner 5",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Ristorante Haandi",
        "description" => "indiano",
        "address" => "Via Nordio Aurelio e Fabio 20",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    // Cinese
    [
        "activity_name" => "Cina Express",
        "description" => "cinese",
        "address" => "Via dell'Istria 22",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Ristorante da Liu",
        "description" => "cinese",
        "address" => "Via Gabriele Foschiatti 5",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
    [
        "activity_name" => "Grande Shanghai",
        "description" => "cinese",
        "address" => "Piazza Venezia 1",
        "partita_iva" => $faker->regexify('[0-4]{11}'),

    ],
];