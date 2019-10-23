<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Zero',
            'size' => '205/55/R16',
            'old_price' => 500.00,
            'new_price' => 475.00,
            'vat_price' => 259.70,
            'tires_load_index' => '82 T',
            'quantity' => 37,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P One',
            'size' => '205/55/R16',
            'old_price' => 700.00,
            'new_price' => 575.00,
            'vat_price' => 359.70,
            'tires_load_index' => '100 T',
            'quantity' => 0,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 9,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Third',
            'size' => '205/55/R16',
            'old_price' => 1200.00,
            'new_price' => 975.00,
            'vat_price' => 759.70,
            'tires_load_index' => '120 T',
            'quantity' => 0,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Forth',
            'size' => '205/55/R16',
            'old_price' => 1400.00,
            'new_price' => 1175.00,
            'vat_price' => 959.70,
            'tires_load_index' => '130 T',
            'quantity' => 5,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 0,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Cars_Off_Road_Vehicles_ATV',
        ]);

        //Trucks
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 0,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 0,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Trucks',
        ]);
        //Trucks end

        //Agriculture
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 9,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Agriculture',
        ]);
        //Agriculture end

        //Inner tubes
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 9,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Inner_tubes',
        ]);
        //Inner tubes end

        //Skid chains
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 9,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Skid_chains',
        ]);
        //Skid chains end

        //Rims
        DB::table('products')->insert([
            'category' => 'Pirelli',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 900.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 9,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Michelin',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Hankook',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Good Year',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Maxxis',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Hartland',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Dunlop',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);

        DB::table('products')->insert([
            'category' => 'Bridgestone',
            'brand' => 'P Second',
            'size' => '205/55/R16',
            'old_price' => 1000.00,
            'new_price' => 775.00,
            'vat_price' => 559.70,
            'tires_load_index' => '110 T',
            'quantity' => 12,
            'season' => 'Summer',
            'specific' => 'Rims',
        ]);
        //Rims end

    }
}
