<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Salle::class, function () {
    static $photo;

    if($photo >= 14 && $photo <= 21)
        $photo++;
    else
        $photo = 14;

    $faker = Faker\Factory::create('fr_FR');

    $villes = ['Paris', 'Marseille', 'Nice', 'Toulon', 'Lyon'];
    $categories = ['reunion', 'bureau', 'formation'];

    return [
        'titre' => $faker->firstName,
        'description' => $faker->realText(),
        'photo' => $photo . '.jpg',
        'pays' => 'France',
        'ville' => $villes[$faker->numberBetween(0,4)],
        'adresse' => $faker->address,
        'cp' => $faker->postcode,
        'capacite' => $faker->numberBetween(50,150),
        'categorie' => $categories[$faker->numberBetween(0,2)],
    ];
});
