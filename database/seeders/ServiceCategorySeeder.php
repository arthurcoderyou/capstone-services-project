<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;


class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_categories')->insert([
            [
                "name" => "Change Oil",
                "slug" => Str::slug("Change Oil"),
                "image" => "f_change_oil.jpg",
            ],

            [
                "name" => "Clean Oil Filter Screen / Change Oil Filter",
                "slug" => Str::slug("Clean Oil Filter Screen / Change Oil Filter"),
                "image" => "f_clean_oil_filter_screen.jpg",
            ],

            [
                "name" => "Clean Carburetor",
                "slug" => Str::slug("Clean Carburetor"),
                "image" => "f_clean_carboretor.jpg",
            ],

            [
                "name" => "Inspect/Clean Air Filter",
                "slug" => Str::slug("Inspect/Clean Air Filter"),
                "image" => "f_inspect_or_clean_air_filter.jpg",
            ],

            [
                "name" => "Clean Fuel Filter",
                "slug" => Str::slug("Clean Fuel Filter"),
                "image" => "f_clean_fuel_filter.jpg",
            ],

            [
                "name" => "Clean Spark Plug",
                "slug" => Str::slug("Clean Spark Plug"),
                "image" => "f_clean_spark_plug.jpg",
            ],

            [
                "name" => "Fuel Pressure Test & Inspection",
                "slug" => Str::slug("Fuel Pressure Test & Inspection"),
                "image" => "f_fuel_pressure_test.jpg",
            ],

            [
                "name" => "DTC Reading / Erasing / Initializing / TP Reset",
                "slug" => Str::slug("DTC Reading / Erasing / Initializing / TP Reset"),
                "image" => "f_tp_reset.jpg",
            ],

            [
                "name" => "TDP and Major Overhaul Replacement",
                "slug" => Str::slug("TDP and Major Overhaul Replacement"),
                "image" => "f_tdp_and_major_overhaul.jpg",
            ],

            [
                "name" => "Battery Recharging",
                "slug" => Str::slug("Battery Recharging"),
                "image" => "f_battery_recharging.jpg",
            ],

            [
                "name" => "Bulb Replacement",
                "slug" => Str::slug("Bulb Replacement"),
                "image" => "f_bulb_replacement.jpg",
            ],

            [
                "name" => "Cables (Clutch, Throttle, Brake / Choke)",
                "slug" => Str::slug("Cables (Clutch, Throttle, Brake / Choke)"),
                "image" => "f_cables.jpg",
            ],

        ]);


    }
}
