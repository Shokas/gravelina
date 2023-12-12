<?php

namespace Database\Seeders;

use App\Models\BicycleType;
use Illuminate\Database\Seeder;

class BicycleTypeSeeder extends Seeder
{
    public function run()
    {
        BicycleType::create([
            'short_name' => 'RB',
            'name' => 'Road Bike',
            'description' => 'A lightweight bicycle designed for racing and long-distance riding.',
        ]);

        BicycleType::create([
            'short_name' => 'MTB',
            'name' => 'Mountain Bike',
            'description' => 'A rugged bicycle designed for riding off-road.',
        ]);

        BicycleType::create([
            'short_name' => 'CX',
            'name' => 'Cyclocross',
            'description' => 'Hybrid bicycles designed for both pavement and light off-road riding. They typically have drop handlebars, narrow tires with treads optimized for both paved and loose surfaces, and a wider gear range than road bikes.',
        ]);

        BicycleType::create([
            'short_name' => 'XC',
            'name' => 'Crosscountry',
            'description' => 'High-performance bicycles designed for cross-country mountain biking. They typically have lightweight frames, suspension forks with adjustable damping, wider tires with treads optimized for rolling resistance and traction, and a wide gear range.',
        ]);

        BicycleType::create([
            'short_name' => 'EB',
            'name' => 'Electric Bicycle',
            'description' => 'Bicycles equipped with an electric motor that assists the rider with pedaling. They can be designed for various purposes, including commuting, recreational riding, and even off-road adventures.',
        ]);
    }
}
